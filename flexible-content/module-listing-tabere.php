<?php 
        $args = array(  
            'post_type' => 'tabere',
            'post_status' => 'publish',
            'posts_per_page' => -1,
        );
    
        $loop = new WP_Query( $args );
?>

<!-- listing tabere -->
<section class="module module--listing u-mg u-mg--md">
    <div class="c-header-lines has-margin">
        <div class="container">
            <div class="inner">
                <span>Urmatoarele tabere:</span>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="c-cards c-cards--camp fx fx--sb fx--wrap">
            <?php  
                while ( $loop->have_posts() ) : $loop->the_post();
                    include get_theme_file_path( 'flexible-content/parts/cards/card-camp.php' );
                endwhile; wp_reset_postdata(); 
            ?>
        </div>
    </div>
</section>
<!-- listing tabere -->