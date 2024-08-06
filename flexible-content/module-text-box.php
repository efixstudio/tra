<?php 
    $layout = $content['layout'];
    $bgcolor = $content['bgcolor'];
    $title = isset( $content[ 'title' ] ) && ! empty( $content[ 'title' ] ) ? $content[ 'title' ] : false;
//    var_dump( $content );
?>

<!-- text box -->
<section class="module module--textbox <?php if($bgcolor === 'white' or $bgcolor === 'green'):?> u-pd u-pd--md bg bg--<?php echo $bgcolor; ?><?php else: ?> u-mg u-mg--md<?php endif; ?>">
    <div class="container">
        <?php if( $title ) : ?>
            <div class="headline"><h2><?php echo $title; ?></h2></div>
        <?php endif;?>
        <?php if($layout === 'one') : ?>
            <div class="c-box">
                <?php if( isset($content['content_one']['title'] ) && ! empty($content['content_one']['title']) ): ?>
                    <div class="c-box__title">
                        <h3><?php echo $content['content_one']['title'];?></h3>
                    </div>
                <?php endif; ?>

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
                            <?php $btn1 = false; ?>
                            <?php if(isset( $content['content_two']['link_col_1'] ) && is_array( $content['content_two']['link_col_1'] ) ): ?>
                                <?php $btn1 = true; ?>
                                <a class="btn btn--primary  fx fx--sb" href="<?php echo $content['content_two']['link_col_1']['url']; ?>" <?php echo isset(  $content['content_two']['link_col_1']['target'] ) ? 'target="_blank"' : ''; ?>>
                                    <?php echo $content['content_two']['link_col_1']['title']; ?>
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg></a>
                            <?php endif; ?>
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
                            <?php if(isset( $content['content_two']['link_col_2'] ) && is_array( $content['content_two']['link_col_2'] ) ) : ?>
                                <div class="c-box__button">
                                    <a class="btn btn--primary fx fx--sb <?php echo $btn1 ? 'btn-b': ''; ?>" href="<?php echo $content['content_two']['link_col_2']['url']; ?>" <?php echo isset(  $content['content_two']['link_col_2']['target'] ) ? 'target="_blank"' : ''; ?>>
                                        <?php echo $content['content_two']['link_col_2']['title']; ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg></a>
                                </div>
                            <?php endif; ?>
                        </div>

                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>
<!-- text box -->