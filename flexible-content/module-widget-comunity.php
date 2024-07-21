<?php $content = get_field('comunitate_g','options'); ?>

<!-- comunitate -->
<section class="module module--comunity">
    <?php if($content['button']['url']) : ?>
    <div class="module-header">
        <div class="container">
            <div class="u-cols fx fx--sb">
                <div class="u-col u-col--left">
                    <a class="btn btn--underline btn--underline--green lg" href="<?php echo $content['button']['url']['url']; ?>">
                        <span><?php echo $content['button']['label']; ?></span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
    
    <div class="container">
        <div class="inner">
            <div class="u-cols fx">
                <div class="u-col u-col--left">
                    <div class="c-editor">
                        <?php echo $content['text']; ?>
                    </div>

                    <?php $links = $content['links']; if($links) : ?>
                    <div class="c-links">
                        <ul>
                            <?php foreach($links as $link) : ?>
                            <li>
                                <a class="btn btn--underline btn--underline--green" href="<?php echo $link['url']['url']; ?>">
                                    <span><?php echo $link['label']; ?></span>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                                </a>
                            </li>
                            <?php endforeach?>
                        </ul>
                    </div>
                    <?php endif; ?>
                </div>

                <div class="u-col u-col--right">
                    <?php get_image($content['image'],'full'); ?>

                    <?php $btn = $content['button_2']; if($btn['url']) : ?>
                    <div class="c-button">
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
<!-- comunitate -->