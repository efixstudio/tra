<?php global $post;
?>



<!-- coaches  -->
<section class="module module--coaches u-pd u-pd--md bg bg--green <?php echo isset( $content['border'] ) && $content['border']  ? 'has-border' : ''; ?>">
    <div class="container">
        <div class="c-coaches">
            <h2 class="c-coaches__title"><?php echo $content['title'] ;?></h2>

            <div class="c-cards c-cards--person">
                <?php if( isset( $content['antrenori'] ) && is_array( $content['antrenori'] ) ):  ?>
                    <?php foreach($content['antrenori'] as $post ) : ?>
                        <?php get_template_part('flexible-content/parts/cards/card-person', '', $content); ?>
                        <?php //include get_theme_file_path( 'flexible-content/parts/cards/card-person.php' ); ?>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
<!-- coaches  -->