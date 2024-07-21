<!-- text togglers -->
<?php if( isset( $content['togglers'] ) && is_array( $content['togglers'] ) ) : ?>
<section class="module module--texttogglers u-mg u-mg--md">
    <div class="container">
        <div class="c-ttogglers">
            <div class="u-cols fx fx--sb">
                <div class="u-col u-col--left">
                    <nav class="c-navbar">
                        <?php $i=1; foreach($content['togglers'] as $item ) : ?>
                            <?php $slug = sanitize_title( $item[ 'title' ] ); ?>
                            <a href="#nav-item-<?php echo $i; ?>" data-toggler-slug="<?php echo esc_attr( $slug ); ?>">
                                <?php echo $item['title']; ?>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                            </a>
                        <?php $i++; endforeach; ?>
                    </nav>
                </div>

                <div class="u-col u-col--right">
                    <?php $i=1; foreach($content['togglers'] as $item ) : ?>
                        <div class="c-content" id="nav-item-<?php echo $i; ?>">
                            <div class="c-editor">
                                <?php echo $item['content']; ?>
                            </div>
                        </div>
                    <?php $i++; endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- text togglers -->