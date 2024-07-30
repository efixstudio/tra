
<!-- <?php echo get_the_title($post->ID); ?> -->
<?php
$disable_links = isset( $args ) && is_array( $args ) && isset( $args['disable_links'] ) ? $args['disable_links'] : false;


?>
<a class="c-card c-card--person" href="<?php echo $disable_links ? 'javascript:void(0)' : get_the_permalink($post->ID); ?>">
    <div class="c-card__image"> 
        <?php echo get_the_post_thumbnail($post->ID, 'original-300'); ?>
    </div>
    
    <div class="c-card__meta">
        <div class="c-card__meta-name">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
            <h3><?php echo get_the_title($post->ID); ?></h3>
        </div>
    </div>
</a>