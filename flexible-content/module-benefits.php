<?php 
    $global = get_field('benefits_group', 'options');
    $feed = $content['feed'];

    if($feed === 'members') {
        $loop = $global['benefits_members'];
    }

    if($feed === 'partners') {
        $loop = $global['benefits_partners'];
    }

    if($feed === 'custom') {
        $loop = $content['custom'];
    }
?>

<!-- benefits cards -->
<section class="module module--benefits has-cards u-mg u-mg--md">
    <div class="container">
        <?php if($loop['heading_title']) : ?>
            <div class="c-sh">
                <h2 class="c-sh__title lg"><?php echo $loop['heading_title']; ?></h2>
            </div>
        <?php endif; ?>

        <div class="c-cards c-cards--benefits fx fx--wrap">
            <?php foreach($loop['cards'] as $card ) : ?>
                <div class="c-card c-card--benefit">
                    <div class="c-card__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="66" height="41" viewBox="0 0 66 41"><g id="Vector_Smart_Object_copy_5" data-name="Vector Smart Object copy 5" transform="translate(-1265 -3549)"><g id="Vector_Smart_Object_copy_5-2" data-name="Vector Smart Object copy 5" transform="translate(1265 3549)"><path id="Path_340" data-name="Path 340" d="M52.565,0V2.029h9.643L36.037,26.948,24.4,15.178,0,39.569,1.43,41,24.386,18.05,36,29.789,63.972,3.155V13.443H66V0Z" fill="#006b38"/></g><path id="Color_Overlay" data-name="Color Overlay" d="M1265,3588.57l24.4-24.391,11.641,11.77,26.171-24.919h-9.643V3549H1331v13.443h-2.028v-10.288L1301,3578.789l-11.611-11.739L1266.43,3590Z" fill="#faa61a"/></g></svg>
                    </div>

                    <div class="c-card__meta">
                        <span class="c-card__meta-title"><?php echo $card['title']; ?></span>
                        <div class="c-card__meta-text">
                            <p><?php echo $card['text']; ?></p>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
<!-- benefits cards -->