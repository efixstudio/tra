<!-- text cards -->
<section class="module module--textcards u-pd u-pd--md">
    <div class="container">
        <div class="c-cards c-cards--text fx fx--sb fx--wrap">
            <?php foreach($content['cards'] as $card) : ?>
                <div class="c-card c-card--text">
                    <span class="c-card__title"><?php echo $card['title']; ?></span>
                    <div class="c-card__text">
                        <div class="c-editor">
                            <p><?php echo $card['text']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- text cards -->