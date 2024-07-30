<?php 
    $global = get_field('cta_group','options');
    $feed = $content['feed'];

    if($feed === 'abonamente') {
        $cta = $global['abonamente_group'];
    }

    if($feed === 'contact') {
        $cta = $global['contact_group'];
    }
?>

<!-- cta -->
<section class="module module--cta u-mg u-mg--md">
    <div class="container">
        <?php if($feed === 'abonamente') : ?>
            <div class="c-cta">
                <div class="u-cols fx fx--sb">
                    <div class="u-col u-col--left">
                        <div class="c-cta__meta">
                            <h2 class="c-cta__meta-title"><?php echo $cta['title']; ?></h2>
                            <div class="c-cta__meta-text">
                                <?php echo $cta['text']; ?>
                            </div>
                        </div>
                    </div>

                    <div class="u-col u-col--right">
                        <?php $btn = $cta['button']; if($btn['url']): ?>
                            <a href="<?php echo $btn['url']['url']; ?>" class="btn btn--primary btn--green">
                                <span><?php echo $btn['label']; ?>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                                </span>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if($feed === 'contact') : ?>
            <div class="c-cta c-cta--contact">
                <div class="u-cols fx fx--sb">
                    <div class="u-col u-col--left">
                        <div class="c-cta__meta">
                            <div class="c-cta__icon">
                                <?php get_image($cta['icon'],'original-300'); ?>
                            </div>
                            <h2 class="c-cta__meta-title"><?php echo $cta['title']; ?></h2>
                        </div>
                    </div>

                    <div class="u-col u-col--right">
                        <?php $btn = $cta['button']; if($btn['url']): ?>
                            <a href="<?php echo $btn['url']['url']; ?>" class="btn btn--primary btn--outline">
                                <span><?php echo $btn['label']; ?>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                                </span>
                            </a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<!-- cta -->