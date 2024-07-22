<?php
    $feed = $content['feed'];

    $args = array(  
        'post_type' => $feed,
        'post_status' => 'publish',
        'posts_per_page' => -1,
    );

    $loop = new WP_Query( $args );
?>



<!-- listing comunity  -->
<section class="module module--listing  u-pd u-pd--md bg bg--green is-feed-listing" data-feed="<?php echo $content['feed']; ?>">
        <div class="container">
            <div class="c-cards c-cards--person">
                <?php  
                    if($content['feed']==='atleti') :
                        while ( $loop->have_posts() ) : $loop->the_post();
                            get_template_part('flexible-content/parts/cards/card-person');
                            //include get_theme_file_path( 'flexible-content/parts/cards/card-person.php' );
                        endwhile; wp_reset_postdata(); 

                    else: 
                    
                        while ( $loop->have_posts() ) : $loop->the_post();
                            get_template_part('flexible-content/parts/cards/card-person');
                            //include get_theme_file_path( 'flexible-content/parts/cards/card-person.php' );
                        endwhile; wp_reset_postdata(); 
                    endif;
                ?>
            </div>
        </div>
    </div>
</section>
<!-- listing comunity  -->