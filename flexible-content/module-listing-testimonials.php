<?php
        $object = get_queried_object();
        $paged  = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(  
            'post_type'         => 'testimoniale',
            'post_status'       => 'publish',
            'posts_per_page'    => 11,
            'paged'             => $paged,
        );

        if( $object instanceof WP_Term ){
            $args['tax_query'] = [ [
                'taxonomy' => 'testimoniale_cat',
                'field' => 'slug',
                'terms' => $object->slug,
            ] ];
        }

        $loop = new WP_Query( $args );

        $testimonialItemCounter = 0;
        $countPosts = $loop->post_count;
?>

<!-- listing testimonials -->
<section class="module module--listing u-mg u-mg--md">
    <div class="container">
        <?php if( $loop->have_posts() ): ?>
        <div class="c-cards c-cards--testimonials">
            <?php  
                while ( $loop->have_posts() ) : $loop->the_post();
                    $testimonialItemCounter++;
                    include get_theme_file_path( 'flexible-content/parts/cards/card-testimonial.php' );
                endwhile;
            ?>
        </div>
        <?php else: ?>
            <h3>Niciun rezultat de afisat.</h3>
        <?php endif;  wp_reset_postdata(); ?>
        <div class="pagination">
            <?php echo custom_loop_pagination( $loop , 999999898); ?>
        </div>
    </div>
</section>
<!-- listing testimonials -->