<!-- text button -->
<section class="module module--textbtn u-mg u-mg--md">
    <div class="container">
        <div class="u-cols u-cols--even fx fx--sb fx--ac">
            <div class="u-col u-col--left">
                <h2><?php echo $content['text']; ?></h2>
            </div>

            <div class="u-col u-col--right">
                <?php $btn = $content['button']; if($btn['url']) : ?>
                    <a href="<?php echo $btn['url']['url']; ?>" class="btn btn--primary btn--outline<?php if($content['button_arrow'] === 'bottom') : ?> btn--toBottom<?php endif; ?>">
                        <?php echo $btn['label']; ?>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                    </a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- text button -->