<?php global $post; ?>

<!-- coaches  -->
<section class="module module--coaches u-pd u-pd--md bg bg--green">
    <div class="container">
        <div class="c-coaches">
            <h2 class="c-coaches__title">Da un ochi si la<br> colegii mei!</h2>

            <div class="c-cards c-cards--person fx fx--wrap">
                <?php foreach($content['antrenori'] as $post ) : ?>
                    <?php include get_theme_file_path( 'flexible-content/parts/cards/card-person.php' ); ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<!-- coaches  -->