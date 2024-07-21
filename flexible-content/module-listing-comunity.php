<?php 
        $argsCoach = array(  
            'post_type' => 'antrenori',
            'post_status' => 'publish',
            'posts_per_page' => -1,
        );
    
        $loopCoach = new WP_Query( $argsCoach );

        $argsAtlet = array(  
            'post_type' => 'atleti',
            'post_status' => 'publish',
            'posts_per_page' => -1,
        );
    
        $loopAtlet = new WP_Query( $argsAtlet );
?>



<!-- listing comunity  -->
<section class="module module--listing  bg bg--green">
    <div class="c-tabs">
        <div class="container">
            <div class="c-tabs-nav c-tabs-nav--comunity fx fx--wrap">
                <a href="#atleti" class="c-tabs-nav__item">
                    <span class="letter">T</span>
                    <span class="title">Atleti
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                    </span>
                </a>

                <a href="#antrenori" class="c-tabs-nav__item">
                    <span class="letter">R</span>
                    <span class="title">Antrenori
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                    </span>
                </a>

                <a href="#" class="c-tabs-nav__item">
                    <span class="letter">A</span>
                    <span class="title">Testimoniale
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                    </span>
                </a>
            </div>

            <div class="c-tabs-content">
                <div class="c-tab-box" id="atleti">
                    <div class="c-cards c-cards--person">
                        <?php  
                            while ( $loopAtlet->have_posts() ) : $loopAtlet->the_post();
                                get_template_part('flexible-content/parts/cards/card-person');
                                //include get_theme_file_path( 'flexible-content/parts/cards/card-person.php' );
                            endwhile; wp_reset_postdata(); 
                        ?>
                    </div>
                </div>

                <div class="c-tab-box" id="antrenori">
                    <div class="c-cards c-cards--person">
                        <?php  
                            while ( $loopCoach->have_posts() ) : $loopCoach->the_post();
                                get_template_part('flexible-content/parts/cards/card-person');
                                //include get_theme_file_path( 'flexible-content/parts/cards/card-person.php' );
                            endwhile; wp_reset_postdata(); 
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- listing comunity  -->