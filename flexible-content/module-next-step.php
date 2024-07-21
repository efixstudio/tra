<!-- next step -->
<section class="module module--nextstep u-pd u-pd--md bg bg--white">
    <div class="container">
        <div class="c-nextstep">
            <div class="c-box c-box--nextstep">
                <?php if($content['heading']) : ?>
                    <div class="c-box__heading">
                        <?php echo $content['heading']; ?>
                    </div>
                <?php endif; ?>

                <?php if($content['cta_title']) : ?>
                    <div class="c-box__title">
                        <h3><?php echo $content['cta_title']; ?></h3>
                    </div>
                <?php endif; ?>
            
                <div class="c-box__content">
                    <div class="c-editor">
                        <p><?php echo $content['cta_text']; ?></p>
                    </div>

                    <?php $btn = $content['cta_button']; if($btn['url']) :  ?>
                        <div class="c-box__button">
                            <a href="<?php echo $btn['url']['url']; ?>" class="btn btn--primary btn--green">
                                <span><?php echo $btn['label']; ?>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                                </span>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- next step -->