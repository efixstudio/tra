<?php 
        $args = array(  
            'post_type' => 'testimoniale',
            'post_status' => 'publish',
            'posts_per_page' => -1,
        );
    
        $loop = new WP_Query( $args );
?>

<!-- listing testimonials -->
<section class="module module--listing u-mg u-mg--md">
    <div class="container">
        <div class="c-cards c-cards--testimonials">
            <?php  
                while ( $loop->have_posts() ) : $loop->the_post();
                    include get_theme_file_path( 'flexible-content/parts/cards/card-testimonial.php' );
                endwhile; wp_reset_postdata(); 
            ?>
        </div>
    </div>
</section>
<!-- listing testimonials -->