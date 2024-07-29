<?php

/**
 * Wrapper function for PHP's print_r() function
 * Prints arrays in a nice readable format
 *
 * @param mixed $var
 *
 */
function pr($var, $sticky = false)
{
    if ($sticky) {
        echo "<pre class='sticky'>";
    } else {
        echo "<pre>";
    }
    print_r($var);
    echo "</pre><style> pre {display: block; padding: 9.5px; margin: 0 0 10px; font-size: 13px; line-height: 1.42857143; color: #333; word-break: break-all; word-wrap: break-word; background-color: #f5f5f5; border: 1px solid #ccc; border-radius: 4px;}</style>";
    if ($sticky) {
        echo "<style> pre.sticky {white-space: pre-wrap;position: fixed; left: 1rem; max-width:calc(100% - 2rem);bottom:1rem;z-index:9999999999999;}</style>";
    }
}


/**
 * Helper function for displaying ACF Flexible Content fields.
 *
 * @param array $contents
 *
 */
function flexible_content($contents = null)
{
    if ($contents === null) {
        $contents = get_field('content');
    }

    if ($contents) {
        foreach ($contents as $i => $content) {

            $content['_position'] = $i + 1;
            $content['_total'] = count($contents);

            if (locate_template('flexible-content/' . str_replace('_', '-', $content['acf_fc_layout']) . '.php')) {
                // @todo Maybe create a helper function to return an array of assets based on module found

                //Enqueue CSS for module if it exists
                if( file_exists( get_template_directory() . '/assets/scss/ui/modules/' . str_replace('_', '-', $content['acf_fc_layout']) . '.min.css' ) ){
                    wp_enqueue_style(
                        str_replace('_', '-', $content['acf_fc_layout']),
                        get_template_directory_uri() . '/assets/scss/ui/modules/' . str_replace('_', '-', $content['acf_fc_layout']) . '.min.css',
                        '',
                        '',
                        'all'
                    );

                    //var_dump( "YES - " . get_template_directory() . '/assets/scss/ui/modules/' . str_replace('_', '-', $content['acf_fc_layout']) . '.min.css' );
                }
                //echo "<div class='template-name' style='position:relative'><pre>" . 'flexible-content/' . str_replace('_', '-', $content['acf_fc_layout']) . '.php' . "</pre></div>";
                include locate_template('flexible-content/' . str_replace('_', '-', $content['acf_fc_layout']) . '.php');
            } elseif (current_user_can('administrator')) {
                pr('Template ' . str_replace('_', '-', $content['acf_fc_layout']) . '.php' . ' missing', true);
            }
        }
    }
}

/**
 * Check if a post/page has a flexible module added
 * 
 * @param string $field acf field name
 * @param int $post_id
 * 
 * @return bool|int flexible element position 
 * 
 */
function has_flexible_module($field, $post_id = null)
{
    global $post;

    if ($post_id === null && !isset($post->ID)) {
        return false;
    }

    if ($post_id === null && isset($post->ID)) {
        $post_id = $post->ID;
    }

    foreach (get_field('content', $post_id) as $i => $content) {

        if ($content['acf_fc_layout'] == $field || str_replace('_', '-', $content['acf_fc_layout']) == $field) {
            return $i;
        }
    }
    return false;
}

/**
 * Character limiter function, does not break the words at the end of the sentence
 *
 * @param string $str
 * @param int $n
 * @param string $end_char
 *
 * @return string
 *
 */
function character_limiter($str, $n = 500, $end_char = '...')
{
    if (strlen($str) < $n) {
        return $str;
    }
    $str = preg_replace("/\s+/", ' ', preg_replace("/(\r\n|\r|\n)/", " ", $str));
    if (strlen($str) <= $n) {
        return $str;
    }
    $out = "";
    foreach (explode(' ', trim($str)) as $val) {
        $out .= $val . ' ';
        if (strlen($out) >= $n) {
            return trim($out) . $end_char;
        }
    }
}

/**
 * Helper function to get the top parent page based on a post ID.
 *
 * @param int $id
 *
 * @return int
 *
 */
function get_top_parent_page_id($id)
{
    $post = get_post($id);
    $ancestors = $post->ancestors;
    if ($ancestors) {
        return end($ancestors);
    } else {
        return $post->ID;
    }
}

/**
 * Get an image with normal and retina sizes
 *
 * @param int $id
 * @param string $size
 * @param array $atts
 * @param bool $lazyload
 *
 * @return string
 *
 */
function get_image($image, $size = 'large', $atts = array(), $lazyload = true)
{
    if ( ! $image ) return; 
    $id = $image;
    if ( is_array($image) ) {
        $id = $image['id'];
    }
    $x1 = wp_get_attachment_image_src($id, $size);
    $x2 = wp_get_attachment_image_src($id, $size . '@x2');

    // Check if image exists
    if ($x1 === false) {
        return false;
    }

    // Add in attributes
    $attributes = '';

    if (!isset($atts['alt'])) {
        $atts['alt'] = get_the_title($id);
    }

    foreach ($atts as $att => $value) {
        $attributes .= $att . '="' . $value . '" ';
    }

    if($lazyload == true){
        $attributes .= 'loading="lazy" ';
    }

    $attributes = trim($attributes);

    // If it's a .svg image, just return it without the srcset attribute
    if (strpos($x1[0], '.svg') !== false) {
        echo '<img  src="' . $x1[0] . '" ' . $attributes . '>';
        return;
    }

    // If there is no @x2 size, return the image without the srcset attribute
    if ($x1[0] == $x2[0] || ($x1[1] * 2 != $x2[1] || $x1[2] * 2 != $x2[2])) {
        echo '<img width="' . $x1[1] . '" height="' . $x1[2] . '"  src="' . $x1[0] . '" ' . $attributes . '>';
        return;
    }

    echo '<img width="' . $x1[1] . '" height="' . $x1[2] . '"  srcset="' . $x2[0] . ' 2x, ' . $x1[0] . ' 1x" src="' . $x1[0] . '" ' . $attributes . '>';
    return;
}

/**
 * Get the contents of a SVG image
 * 
 * @param string $url
 * @param array $atts
 * 
 * @return string
 * 
 */
function get_svg($image = '', $atts = [])
{
    if (empty($image)) {
        return '';
    }

    $url = $image;

    if (is_array($image)) {
        $url = wp_get_original_image_path($image['id']);
    }

    $contents = file_get_contents($url);

    // Remove XML version
    $contents = str_replace('<?xml version="1.0" encoding="UTF-8"?>', '', $contents);

    // Remove classes
    $contents = preg_replace('/\sclass=[\'|"][^\'"]+[\'|"]/', '', $contents);

    // Add Attributes
    foreach ($atts as $attribute => $value) {
        $contents = str_replace('<svg ', '<svg ' . $attribute . '="' . $value . '" ', $contents);
    }

    return $contents;
}


/**
 * Output the <img /> tag from the assets/img folder
 * 
 * @param string $filename
 * 
 */
function img($filename)
{
    echo '<img loading="lazy" src="' . get_bloginfo('template_url') . '/assets/img/' . $filename . '" alt=""/>';
}
