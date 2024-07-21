<?php 

    $layout = $content['layout'];
    $bgcolor = $content['bg_color'];
    $size = isset( $content['size'] ) ? $content['size'] : '';
?>

<!-- text editor -->
<section class="module module--texteditor <?php if($bgcolor === 'white' or $bgcolor === 'green') : ?> u-pd u-pd--md bg bg--<?php echo $bgcolor; ?><?php else: ?> u-md u-mg--md<?php endif;?>">
    <div class="container">
        <?php if($layout==='one') : ?>
            <div class="c-editor">
                <?php echo $content['text_editor_one']; ?>
            </div>
        <?php endif; ?>

        <?php if($layout==='two') : ?>
            <div class="u-cols u-cols--<?php if($size === '3070') : ?>3070<?php else : ?>even<?php endif; ?> fx<?php if($content['align']==='center') : ?> fx--ac<?php endif; ?> fx--sb">
                <div class="u-col u-col--left">
                    <div class="c-editor">
                        <?php echo $content['text_editor_two']['left']; ?>
                    </div>
                </div>

                <div class="u-col u-col--right">
                    <div class="c-editor">
                       <?php echo $content['text_editor_two']['right']; ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<!-- text editor -->