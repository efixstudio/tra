<?php 
        $args = array(  
            'post_type' => 'parteneri',
            'post_status' => 'publish',
            'posts_per_page' => -1,
        );
    
        $loop = new WP_Query( $args );
?>

<!-- listing partners -->
<section class="module module--listing u-mg u-mg--md">
    <div class="container">
        <div class="c-cards c-cards--partners fx fx--wrap">
            <?php 
                while ( $loop->have_posts() ) : $loop->the_post();
                    include get_theme_file_path( 'flexible-content/parts/cards/card-partner.php' );
                endwhile; wp_reset_postdata(); 
            ?>
        </div>
    </div>
</section>
<!-- listing partners -->