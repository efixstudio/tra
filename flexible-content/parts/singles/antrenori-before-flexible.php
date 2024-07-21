<?php if($post->post_type === 'antrenori') : ?>
    <?php $video = get_field('video'); ?>

    <!-- page header -->
    <section class="module module--ph is-coach u-mg u-mg--md">
        <div class="container">
            <div class="u-cols fx">
                <div class="u-col u-col--left">
                    <div class="c-text">
                        <h1 class="c-text__title"><?php the_title(); ?></h1>
                        
                        <div class="c-scroll">
                            <span>scroll to discover</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                        </div>

                        <div class="c-text__content">
                            <div class="c-editor">
                                <?php the_field('description'); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="u-col u-col--right">
                    <div class="c-text__image">
                        <?php if($video['youtube_url']) : ?>
                            <a href="<?php echo $video['youtube_url']; ?>" class="u-play">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 9 5.15625 L 9 26.84375 L 10.53125 25.84375 L 25.84375 16 L 10.53125 6.15625 Z M 11 8.8125 L 22.15625 16 L 11 23.1875 Z"/></svg>
                            </a>
                        <?php endif; ?>

                        <?php 
                            if($video['bgimage']) : 
                                get_image($video['bgimage'],'full');
                            else:
                                the_post_thumbnail();
                            endif;
                        ?>
                    </div>

                    <div class="c-details">
                        <?php $logos = get_field('certificates'); if($logos) :  ?>
                            <div class="c-detail c-detail--certificates">
                                <span>Antrenor certificat Training Peaks</span>
                                <div class="c-logos">
                                    <?php foreach($logos as $logo) :  ?>
                                        <?php get_image($logo['certificate_image'],'full'); ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="c-detail">
                            <span>UTMB Index: <?php the_field('utmb_index'); ?></span>
                        </div>

                        <div class="c-detail">
                            <a href="<?php the_field('videocall_url'); ?>">
                                Programeaza un video-call
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page header -->
<?php endif; ?>