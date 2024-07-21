<!-- form -->
<section class="module module--form u-mg u-mg--md">
    <div class="container">
        <div class="c-form">
            <div class="u-form">
                <?php echo isset( $content['form_id'] ) ? do_shortcode('[gravityform id="'. $content['form_id'] .'" title="false" description="false" ajax="true"]') : ''; ?>
            </div>
        </div>
    </div>
</section>
<!-- form -->