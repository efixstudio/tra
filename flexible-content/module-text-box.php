<?php 
    $layout = $content['layout'];
    $bgcolor = $content['bgcolor'];
?>

<!-- text box -->
<section class="module module--textbox<?php if($bgcolor === 'white' or $bgcolor === 'green'):?> u-pd u-pd--md bg bg--<?php echo $bgcolor; ?><?php else: ?> u-mg u-mg--md<?php endif; ?>">
    <div class="container">
        <?php if($layout === 'one') : ?>
            <div class="c-box">
                <div class="c-box__title">
                    <h3><?php echo $content['content_one']['title'];?></h3>
                </div>

                <div class="c-box__content">
                    <div class="c-editor">
                        <?php echo $content['content_one']['text'];?>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <?php if($layout === 'two') : ?>
            <div class="c-box">
                <div class="u-cols fx bx bx--<?php echo $content['box_layout']; ?>">
                    <div class="u-col u-col--left">
                        <?php if($content['content_two']['title_col_1']) : ?>
                            <div class="c-box__title">
                                <h3><?php echo $content['content_two']['title_col_1'];?></h3>
                            </div>
                        <?php endif; ?>

                        <div class="c-box__content">
                            <div class="c-editor"><?php echo $content['content_two']['text_col_1'];?></div>
                        </div>
                    </div>

                    <div class="u-col u-col--right">
                        <?php if($content['content_two']['title_col_2']) : ?>
                            <div class="c-box__title">
                                <h3><?php echo $content['content_two']['title_col_2'];?></h3>
                            </div>
                        <?php endif; ?>
                        
                        <div class="c-box__content">
                            <div class="c-editor"><?php echo $content['content_two']['text_col_2'];?></div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<!-- text box -->