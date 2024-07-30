<?php
    if( isset( $content['coach'] ) && $content[ 'coach'] !== false ):
        $coach = $content['coach'];

        $image = get_the_post_thumbnail($coach->ID, 'original-600');
?>

<!-- coach bio -->
<section class="module module--coachbio bg bg--green u-pd u-pd--md">
    <div class="container">
        <div class="c-bio">
            <div class="c-bio__header">
                <div class="u-cols fx fx--ac">
                    <div class="u-col u-col--left">
                        <h3 class="c-bio__header-label">
                            Antrenor
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                        </h3>
                    </div>

                    <div class="u-col u-col--left">
                        <h3 class="c-bio__header-label"><?php echo get_the_title($coach->ID); ?></h3>
                    </div>
                </div>
            </div>

            <div class="c-bio__body">
                <div class="u-cols fx fx--sb fx--ac">
                    <div class="u-col u-col--left">
                        <?php echo $image; ?>
                    </div>

                    <div class="u-col u-col--right">
                        <div class="c-editor">
                            <?php echo $content['text']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- coach bio -->