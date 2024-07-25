<?php
$social = get_field('social_links','options');
?>
<section class="module module--social-links u-mg u-mg--md">
    <div class="container">
        <div class="row">
            <div class="col col--left">
                <h2><?php echo $content['title']; ?></h2>
            </div>
            <div class="col col--right">
                <?php if( is_array( $social ) ): ?>
                    <?php foreach( $social as $social_url ):
                            if( !isset( $social_url['link'] ) || ! is_array( $social_url['link'] ) ) continue; ?>
                        <a href="<?php echo $social_url['link']['url']; ?>" target="_blank">
                            <span><?php echo $social_url['link']['title']; ?></span>
                            <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                        </a>
                    <?php endforeach;?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

