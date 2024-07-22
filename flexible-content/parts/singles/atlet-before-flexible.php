<?php if($post->post_type === 'atleti') : ?>
    <!-- page header -->
    <section class="module module--ph is-athlete u-mg u-mg--md">
        <div class="container">
            <div class="u-cols fx">
                <div class="u-col u-col--left">
                    <div class="c-text">
                        <h1 class="c-text__title"><?php the_title(); ?></h1>
                        
                        <div class="c-scroll">
                            <span>scroll to discover</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- page header -->

    <!-- text box -->
    <section class="module module--athlete-info is-athlete bg bg--green">
        <div class="container">
            <?php $details = get_field('details');  ?>
            <div class="grid-member--info">
                <div class="grid-member--item c-text__image">
                    <div class="grid-member--image">
                        <?php the_post_thumbnail(); ?>
                        <?php if ($details['youtube_url']) : ?>
                            <a href="<?php echo $details['youtube_url']; ?>" class="u-play" data-fancybox="video-gallery">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                                    <path d="M 9 5.15625 L 9 26.84375 L 10.53125 25.84375 L 25.84375 16 L 10.53125 6.15625 Z M 11 8.8125 L 22.15625 16 L 11 23.1875 Z"/>
                                </svg>
                            </a>
                        <?php endif; ?>
                    </div>

                </div>
                <div class="grid-member--item">
                    <span class="label"><strong>Data nasterii: </strong></span>
                    <span class="value"><?php echo $details['birthdate']; ?></span>
                </div>
                <div class="grid-member--item">
                    <span class="label"><strong>Varsta: </strong></span>
                    <span class="value"><?php echo  calculate_age( $details['birthdate'] ) ; ?> ani</span>
                </div>

                <div class="grid-member--item">
                    <span class="label"><strong>Locul nasterii: </strong></span>
                    <span class="value"><?php echo $details['place_of_birth']; ?></span>
                </div>

                <div class="grid-member--item">
                    <span class="label"><strong>Job: </strong></span>
                    <span class="value"><?php echo $details['job']; ?></span>
                </div>
                <div class="grid-member--item">
                    <span class="label"><strong>Proba preferata: </strong></span>
                    <span class="value"><?php echo $details['favorite_try']; ?></span>
                </div>
                <div class="grid-member--item">
                    <span class="label"><strong>Membru TRA: </strong></span>
                    <span class="value"><?php echo $details['member_since']; ?></span>
                </div>
                <div class="grid-member--item">
                    <span class="label"><strong>Antrenat de: </strong></span>
                    <span class="value"><a href="<?php echo get_permalink( $details['trainer']->ID ); ?>"><?php echo $details['trainer']->post_title; ?></a></span>
                </div>

                <?php
                    $socialLinks = get_field('social_links');
                    if( is_array( $socialLinks ) ):
                        $links = [];
                        foreach( $socialLinks as $link ):
                            $links[] = '<a href="' . $link[ 'link' ]['url'] . '" target="_blank">' . $link[ 'link' ]['title'] . '</a>';
                        endforeach;
                ?>
                    <div class="grid-member--item grid-member--info-social">
                        <span class="label"><strong>FOLLOW: </strong></span>
                        <div class="value"><?php echo implode( "<em>/</em>", $links); ?></div>
                    </div>

                <?php endif; ?>

            </div>
        </div>
    </section>



    <!-- text box -->
    <section class="module module--textbox u-pd u-pd--md bg bg--green">
        <div class="container">
            <div class="c-box">
                <div class="c-box__content">
                    <div class="c-editor">
                        <?php the_field('intro');  ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- text box -->
<?php endif; ?>