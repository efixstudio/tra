<?php
    if( isset( $content['gallery'] ) && is_array( $content['gallery'] ) && count( $content['gallery'] ) > 0 ):
        $featuredImage = $content['gallery']['0'];
        $images = array_slice($content['gallery'],1);
        $videos = $content['video'] ?? null;
?>

<!-- gallery -->
<section class="module module--gallery u-mg u-mg--md">
    <div class="container">
        <div class="c-gallery">
            <div class="c-gallery__column" style="background: url(<?php echo $featuredImage['url']; ?>); background-size: cover; background-position: center;">
                <a href="<?php echo $featuredImage['url']; ?>" data-fancybox="gallery" class="c-gallery__item fancybox"></a>
                <div class="c-buttons">
                    <a href="<?php echo $featuredImage['url']; ?>" data-fancybox="gallery" class="fancybox">Foto</a>
                    <?php if( $videos ) : ?>

                        <a href="<?php echo isset( $videos[0]['url'] ) ? $videos[0]['url'] : '#';?>" data-fancybox="video-gallery">Video</a>
                        <div class="" style="display: none">
                            <?php
                                if( is_array( $videos ) ):
                                    foreach( $videos as $key => $item  ):
                                        if( $key === 0) continue;
                            ?>
                                <a href="<?php echo $item[ 'url' ]; ?>" data-fancybox="video-gallery"></a>
                            <?php endforeach; endif; ?>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <div class="c-gallery__column">
                <?php  $countImages = 0; foreach($images as $item ) : $countImages++; ?>
                    <a href="<?php echo $item['url']; ?>" data-fancybox="gallery" class="c-gallery__item fancybox <?php echo $countImages < 5 ? 'is-visible' : ''; ?>">
                        <?php get_image($item, 'original-300'); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- gallery -->
