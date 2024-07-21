<?php 
    $featuredImage = $content['gallery']['0'];
    $images = array_slice($content['gallery'],1);
?>

<!-- gallery -->
<section class="module module--gallery u-mg u-mg--md">
    <div class="container">
        <div class="c-gallery">
            <div class="c-gallery__column" style="background: url(<?php echo $featuredImage['url']; ?>); background-size: cover; background-position: center;">
                <a href="<?php echo $featuredImage['url']; ?>" data-fancybox="gallery" class="c-gallery__item fancybox"></a>
                <div class="c-buttons">
                    <a href="#" class="js-fancytrigger">Foto</a>
                    <a href="#">Video</a>
                </div>
            </div>

            <div class="c-gallery__column">
                <?php foreach($images as $item ) : ?>
                    <a href="<?php echo $item['url']; ?>" data-fancybox="gallery" class="c-gallery__item fancybox">
                        <?php get_image($item, 'full'); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- gallery -->
