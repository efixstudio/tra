<?php $image = $content['side_image']; ?>

<!-- benefits toggler -->
<section class="module module--benefits has-togglers u-mg u-mg--md">
    <div class="container">
        <div class="u-cols<?php if($image) : ?> has-image<?php endif; ?>">
            <?php if($image) : ?>
                <div class="u-col u-col--left">
                    <?php get_image($image, 'full'); ?>
                </div>
            <?php endif; ?>

            <div class="u-col u-col--right">
                <div class="c-togglers">
                    <?php foreach($content['togglers'] as $item) : ?>
                        <div class="c-toggler">
                            <div class="c-toggler__header">
                                <span class="c-toggler__header-title"><?php echo $item['title']; ?></span>
                                <span class="c-toggler__header-icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 7.21875 5.78125 L 5.78125 7.21875 L 14.5625 16 L 5.78125 24.78125 L 7.21875 26.21875 L 16 17.4375 L 24.78125 26.21875 L 26.21875 24.78125 L 17.4375 16 L 26.21875 7.21875 L 24.78125 5.78125 L 16 14.5625 Z"/></svg></span>
                            </div>

                            <div class="c-toggler__content">
                                <div class="c-editor">
                                    <?php echo $item['text']; ?>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- benefits toggler -->