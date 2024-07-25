<?php

    if( isset( $content['camp'] ) && $content['camp']):
        $post = $content['camp'];
        $title = isset( $content[ 'title'] ) && ! empty( $content[ 'title' ] ) ? $content[ 'title' ] : false;
        $camps_header_link = false;
        if( $title ){
            $camps_header_link = get_general_page_url('general_pages', 'tabere');
        }
?>

<!-- camps widget -->

<section class="module module--camps bg bg--green <?php echo $title ? 'has-title' : ''; ?>">
    <div class="container">
        <div class="c-camps">
            <div class="c-camp">
                <?php if( $title && is_array( $camps_header_link ) ): ?>
                <div class="u-cols u-cols--header fx fx--sb">
                    <div class="u-col u-col--left">
                        <a href="<?php echo $camps_header_link[ 'url' ]; ?>" class="btn btn--underline btn--underline--green lg">
                            <span><?php echo $title; ?></span>
                            <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>

                        </a>
                    </div>
                    <div class="u-col u-col--right">
                    </div>
                </div>
                <?php endif; ?>

                <div class="u-cols u-cols--main fx fx--sb">
                    <div class="u-col u-col--left">
                        <div class="c-station">
                            <div class="c-station__header fx fx--sb">
                                <span><?php the_field('data_eveniment',$post->ID);?></span>
                                <a href="#"><?php the_field('locatie',$post->ID);?></a>
                            </div>

                            <div class="c-station__meta">
                                <h2 class="c-station__meta-title"><?php echo get_the_title($post->ID); ?></h2>
                                <div class="c-editor">
                                    <p><?php the_field('short_description', $post->ID); ?></p>
                                </div>
                            </div>

                            <div class="c-station__footer">
                                <div class="u-cols u-cols--footer fx fx--sb">
                                    <div class="u-col u-col--left">
                                        <span><?php the_field('seats_available',$post->ID);?> locuri</span>
                                    </div>

                                    <div class="u-col u-col--right">
                                        <a href="<?php echo get_the_permalink($post->ID); ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="u-col u-col--right">
                        <div class="c-camp__image">
                            <?php echo get_the_post_thumbnail($post->ID); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- camps widget -->