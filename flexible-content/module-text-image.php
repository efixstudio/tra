<!-- text and image -->
<section class="module module--ti <?php if($content['bg_image']===true):?> bg bg--green u-pd u-pd--lg has-bg<?php else: ?> is-transparent u-mg u-mg--bottom<?php endif; ?><?php if($content['no_margin_bottom']):?> no-mg--bottom<?php endif; ?>">
    <div class="container">
        <div class="u-cols u-cols--even fx fx--<?php echo $content['align']; ?> fx--sb<?php if($content['reverse_columns']===true) : ?> is-reversed<?php endif; ?>">
            <div class="u-col u-col--left">
                <div class="c-editor">
                    <?php echo $content['content']; ?>
                </div>

                <?php $btn = $content['button']; if($btn['url']) : ?>
                    <div class="c-button">
                        <a href="<?php echo $btn['url']['url']; ?>" class="btn btn--primary btn--simple">
                            <span><?php echo $btn['label']; ?>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                            </span>
                        </a>
                    </div>
                <?php endif; ?>

                <?php if($content['blog_articles_sw']===true) : ?>
                    <div class="c-list">
                        <h2 class="c-list__title">Articole de <br>pe blog</h2>
                        <?php foreach($content['blog_articles'] as $post ) : ?>
                            <a href="<?php echo get_the_permalink($post->ID); ?>">
                                <?php echo get_the_title($post->ID); ?>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                            </a>
                        <?php endforeach; ?>
                    </div>
                <?php endif; ?>
            </div>

            <div class="u-col u-col--right">
                <?php echo get_image($content['image'],'original-900'); ?>
            </div>
        </div>
    </div>
</section>
<!-- text and image -->
