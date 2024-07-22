<?php if( isset( $content['box'] ) && is_array( $content['box'] ) ): ?>
    <!-- widget listing boxes  -->
    <section class="module module--widget-listing-boxes u-pd u-pd--md bg bg--green">
        <div class="c-tabs">
            <div class="container">
                <div class="c-tabs-nav c-tabs-nav--listing-boxes fx fx--wrap">
                    <?php foreach( $content['box'] as $item ): ?>
                        <?php if( isset( $item['url'] ) && is_array( $item['url'] ) ): ?>
                            <a href="<?php echo array_key_exists( 'url', $item['url'] ) ? $item['url']['url'] : '#'; ?>" class="c-tabs-nav__item">
                                <span class="letter"><?php echo $item['letter']; ?></span>
                                    <span class="title"><?php echo array_key_exists( 'title', $item['url'] ) ? $item['url']['title'] : ''; ?>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                            </span>
                            </a>
                        <?php endif; ?>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
    </section>
    <!-- widget listing boxes  -->
<?php endif; ?>