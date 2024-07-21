<!-- usps -->
<section class="module module--usps">
    <div class="container">
        <div class="c-usps">
            <?php foreach($content['usps'] as $item ) : ?>
                <div class="c-usp">
                    <?php echo $item['text']; ?>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- usps -->