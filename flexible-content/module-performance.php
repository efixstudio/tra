<!-- performance -->
<section class="module module--textbox u-mg u-mg--md">
    <div class="container">
        <div class="c-box">
            <div class="u-cols bx bx--equal fx">
                <div class="u-col u-col--left">
                    <div class="c-box__title">
                        <h3>Performantele mele</h3>
                    </div>

                    <div class="c-box__content">
                        <div class="c-editor">
                            <?php echo $content['content']; ?>
                        </div>
                    </div>
                </div>

                <div class="u-col u-col--right">
                    <div class="c-box__title">
                        <h3>Atletii pe care ii antrenez</h3>
                    </div>
                    
                    <div class="c-box__content">
                        <div class="c-editor">
                            <div class="c-atlet">
                                <?php if( isset( $content['feed'] ) && is_array( $content['feed'] ) ): ?>
                                    <?php foreach($content['feed'] as $post ) : ?>
                                        <a href="<?php echo get_the_permalink($post->ID); ?>">
                                            <span><?php echo get_the_title($post->ID); ?></span>
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                                        </a>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- performance -->