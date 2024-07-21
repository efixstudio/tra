<?php if($post->post_type === 'post') : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <!-- author badge -->
        <section class="module module--authorbadge u-mg u-mg--sm">
            <div class="container">
                <div class="c-badge c-badge--author bg bg--green">
                    <div class="c-badge__avatar">
                        <svg height=25 viewBox="0 0 25.999 25"width=25.999 xmlns=http://www.w3.org/2000/svg><path d=M438.636,5288v-1.19a6.549,6.549,0,0,0-6.529-6.548h-8.184a6.555,6.555,0,0,0-6.559,6.548V5288H415v-1.19a8.935,8.935,0,0,1,8.922-8.93h8.155a8.935,8.935,0,0,1,8.922,8.93V5288Zm-15.659-16.667v-2.977a5.319,5.319,0,1,1,10.637,0v2.977a5.319,5.319,0,1,1-10.637,0Zm2.364-2.977v2.977a2.955,2.955,0,1,0,5.91,0v-2.977a2.955,2.955,0,1,0-5.91,0Z data-name="Color Overlay"fill=#fff id=Color_Overlay transform="translate(-415 -5263)"/></svg>
                    </div>

                    <div class="c-badge__meta">
                        <span class="author">Scris de: <strong><?php the_author(); ?></strong></span>
                        <span><strong><?php echo  get_the_date('d.m.Y'); ?></strong></span>
                    </div>

                    <div class="c-badge__bio">
                        <div class="c-editor">
                            <p><?php echo get_the_author_meta('description', ); ?></p>
                        </div>
                    </div>
                    <?php
                        $profilePage = get_field('profile_page', 'user_' . get_the_author_meta("ID") );

                        if( $profilePage ):
                        ?>
                            <div class="c-badge__profile fx fx--je">
                                <a href="<?php echo $profilePage;?>" class="btn btn--primary">
                                <span>Află mai multe
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                                </span>
                                </a>
                            </div>

                        <?php endif;?>

                </div>
            </div>
        </section>
        <!-- author badge -->

        <div class="bg bg--white">
            <!-- comments -->
            <section class="module module--comments u-mg u-mg--sm<?php if(is_user_logged_in()) : ?> is-logged<?php endif; ?>">
                <div class="container">
                    <?php 
                        if ( comments_open() || get_comments_number() ) :
                            comments_template();
                        endif;
                    ?>
                </div>
            </section>
            <!-- comments -->

            <!-- articole recomandate -->
            <?php 
                $args = array(  
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => -1,
                );
            
                $loop = new WP_Query( $args );
            ?>

            <section class="module module--singlelatest">
                <div class="c-ss c-ss--latest">
                    <div class="container">
                        <div class="c-ss__header">
                            <h2>Articole recomandate</h2>
                            <div class="c-ctrls"></div>
                        </div>
                    </div>

                    <div class="u-ss u-ss--latest">
                        <?php  while ( $loop->have_posts() ) : $loop->the_post(); ?>
                            <?php include get_theme_file_path( 'flexible-content/parts/cards/card-blog.php' ); ?>
                        <?php endwhile; wp_reset_postdata(); ?>
                    </div>
                </div>
            </section>
            <!-- articole recomandate -->
        </div>
    <?php endwhile; ?>
<?php endif; ?>