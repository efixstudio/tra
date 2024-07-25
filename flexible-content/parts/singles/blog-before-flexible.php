<?php if($post->post_type === 'post') : ?>
<?php
    $nutritional_fields = [ 'carbohidrati', 'lichide', 'sodiu', 'cafeina'];
    $nutritional_data = [];
    foreach( $nutritional_fields as $field ){
        $value = get_field( $field );
        if( $value )
            $nutritional_data[ $field ] = $value;
    }

    require_once( TRA_THEME_DIR . '/include/icons-svg/icons.php');

?>
    <!-- page header -->
    <section class="module module--ph u-mg u-mg--md">
        <div class="container">
            <div class="c-text-back">
                <?php $blog_page = get_general_page_url('general_pages', 'blog' ); ?>
                <a href="<?php echo $blog_page && is_array( $blog_page ) ? $blog_page['url'] : '#'?>">
                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="" viewBox="0 0 256 256"><path d="M165.66,202.34a8,8,0,0,1-11.32,11.32l-80-80a8,8,0,0,1,0-11.32l80-80a8,8,0,0,1,11.32,11.32L91.31,128Z"></path></svg>
                    <span><?php echo $blog_page && is_array( $blog_page ) ? $blog_page['title'] : ''?></span>
                </a>
            </div>
            <div class="c-text">
                <h1 class="c-text__title is-single">
                    <?php the_title(); ?>
                </h1>
            </div>
        </div>
    </section>
    <!-- page header -->

    <!-- nutrition -->
    <?php if( ! empty( $nutritional_data ) ): ?>
        <section class="c-nutrition">
        <div class="container">
            <span class="c-nutrition__title">Aport nutritional consumat</span>
        </div>

        <div class="inner">
            <div class="container">
                <div class="c-items">
                    <?php foreach( $nutritional_data as $label => $value ): ?>
                        <div class="c-item">
                            <div class="c-item__icon">
                                <?php if( isset( $icons ) && is_array( $icons ) && array_key_exists( $label, $icons ) ){
                                    echo $icons[ $label ];
                                }?>
                            </div>
                            <div class="c-item__title">
                                <span><?php echo ucfirst( $label ); ?></span>
                                <span><?php echo $value; ?></span>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <!-- nutrition -->
<?php endif; ?>