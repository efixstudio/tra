<?php if ($post->post_type === 'antrenori') : ?>
    <?php $video = get_field('video'); ?>

    <?php
    $is_waiting_list = get_field('waiting_list');
    if( $is_waiting_list ){
        $waiting_list_title = get_field('waiting_list_title');
        $waiting_list_description = get_field('waiting_list_description');
        $waiting_list_form = get_field('waiting_list_form');
    }
    ?>

    <!-- page header -->
    <section class="module module--ph u-mg u-mg--md">
        <div class="container">
            <div class="c-card--single-member-header is-coach">
                <div class="grid-column grid-column--left">
                    <div class="c-text">
                        <h1 class="c-text__title"><?php the_title(); ?></h1>

                        <div class="c-scroll">
                            <span>scroll to discover</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                <path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path>
                            </svg>
                        </div>
                        <div class="show-mobile">
                            <div class="c-text__image">
                                <?php if ($video['youtube_url']) : ?>
                                    <a href="<?php echo $video['youtube_url']; ?>" class="u-play" data-fancybox="video-gallery">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                            <path d="M 9 5.15625 L 9 26.84375 L 10.53125 25.84375 L 25.84375 16 L 10.53125 6.15625 Z M 11 8.8125 L 22.15625 16 L 11 23.1875 Z"/>
                                        </svg>
                                    </a>
                                <?php endif; ?>

                                <?php
                                if ($video['bgimage']) :
                                    get_image($video['bgimage'], 'original-600');
                                else:
                                    the_post_thumbnail('original-600');
                                endif;
                                ?>
                            </div>
                        </div>

                        <div class="c-text__content">
                            <div class="c-editor">
                                <?php the_field('description'); ?>
                            </div>
                        </div>
                        <div class="show-mobile">
                            <div class="c-details">
                                <?php $logos = get_field('certificates');
                                if ($logos) : ?>
                                    <div class="c-detail c-detail--certificates">
                                        <span><strong>Antrenor certificat Training Peaks</strong></span>
                                        <div class="c-logos">
                                            <?php foreach ($logos as $logo) : ?>
                                                <?php get_image($logo['certificate_image'], 'square-xsmall'); ?>
                                            <?php endforeach; ?>
                                        </div>
                                    </div>
                                <?php endif; ?>

                                <div class="c-detail">
                                    <span><strong>UTMB Index:&nbsp;</strong><?php the_field('utmb_index'); ?></span>
                                </div>

                                <div class="c-detail c-detail--cta">

                                    <?php if( ! $is_waiting_list ) : ?>
                                        <?php echo do_shortcode("[tra_calendly_btn calendly_url='" . get_field('videocall_url') . "']"); ?>
                                    <?php else: ?>
                                        <?php echo do_shortcode('[tra_modal btn_label="Lista de asteptare" title="' . $waiting_list_title . '" description="' .$waiting_list_description  . '"]' . $waiting_list_form . '[/tra_modal]'); ?>
                                    <?php endif; ?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="grid-column grid-column--right hide-mobile">
                    <div class="c-text__image">
                        <?php if ($video['youtube_url']) : ?>
                            <a href="<?php echo $video['youtube_url']; ?>" class="u-play" data-fancybox="video-gallery">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                    <path d="M 9 5.15625 L 9 26.84375 L 10.53125 25.84375 L 25.84375 16 L 10.53125 6.15625 Z M 11 8.8125 L 22.15625 16 L 11 23.1875 Z"/>
                                </svg>
                            </a>
                        <?php endif; ?>

                        <?php
                        if ($video['bgimage']) :
                            get_image($video['bgimage'], 'original-600');
                        else:
                            the_post_thumbnail('original-600');
                        endif;
                        ?>
                    </div>

                    <div class="c-details">
                        <?php $logos = get_field('certificates');
                        if ($logos) : ?>
                            <div class="c-detail c-detail--certificates">
                                <span><strong>Antrenor certificat Training Peaks</strong></span>
                                <div class="c-logos">
                                    <?php foreach ($logos as $logo) : ?>
                                        <?php get_image($logo['certificate_image'], 'square-xsmall'); ?>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                        <?php endif; ?>

                        <div class="c-detail">
                            <span><strong>UTMB Index:&nbsp;</strong><?php the_field('utmb_index'); ?></span>
                        </div>

                        <div class="c-detail c-detail--cta">
                            <?php if( ! $is_waiting_list ) : ?>
                                <?php echo do_shortcode("[tra_calendly_btn calendly_url='" . get_field('videocall_url') . "']"); ?>
                            <?php else: ?>
                                <?php echo do_shortcode('[tra_modal btn_label="Lista de asteptare" title="' . $waiting_list_title . '" description="' .$waiting_list_description  . '"]' . $waiting_list_form . '[/tra_modal]'); ?>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page header -->
<?php endif; ?>