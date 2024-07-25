<?php
        $paged  = (get_query_var('paged')) ? get_query_var('paged') : 1;
        $args = array(  
            'post_type'         => 'tabere',
            'post_status'       => 'publish',
            'posts_per_page'    => 6,
            'paged'             => $paged,
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
                if( $loop->have_posts() ) :
                    while ( $loop->have_posts() ) : $loop->the_post();
                        include get_theme_file_path( 'flexible-content/parts/cards/card-camp.php' );
                    endwhile;
                else:
                    echo '<h4>' . __('Niciun rezultat pentru selectia facuta.', 'trailrunningacademy') . '</h4>';
                endif;
                wp_reset_postdata();
            ?>
        </div>
        <div class="pagination">
            <?php echo custom_loop_pagination( $loop ); ?>
        </div>
    </div>
</section>
<!-- listing tabere -->