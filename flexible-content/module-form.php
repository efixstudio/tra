<!-- form -->
<?php $bgcolor = isset( $content['bgcolor'] ) ? $content['bgcolor'] : false; ?>

<section class="module module--form <?php echo  $bgcolor ? 'bg bg--' . $bgcolor : ''; ?>">
    <div class="container">
        <div class="c-form ">
            <div class="c--title">
                <h2><?php echo $content['title']; ?></h2>
            </div>
            <div class="u-form <?php echo  $bgcolor ? 'bg bg--' . $bgcolor : ''; ?>">
                <?php echo isset( $content['form_id'] ) ? do_shortcode('[gravityform id="'. $content['form_id'] .'" title="false" description="false" ajax="true"]') : ''; ?>
            </div>
        </div>
    </div>
</section>
<!-- form -->