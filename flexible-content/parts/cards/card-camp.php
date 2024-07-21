<div class="c-card c-card--camp">
    <a href="<?php echo get_the_permalink(); ?>" class="c-card__image">
        <?php echo get_the_post_thumbnail(); ?>
    </a>

    <div class="c-card__meta">
        <?php $date = get_field('data_eveniment'); $location = get_field('locatie'); if($date or $location ) : ?>
        <div class="c-card__meta-header fx fx--ac fx--sb">
            <?php if($date) : ?>
                <span><?php echo $date; ?></span>
            <?php endif; ?>
            
            <?php if($location) : ?>
                <span><?php echo $location; ?></span>
            <?php endif; ?>
        </div>
        <?php endif; ?>

        <a href="<?php echo get_the_permalink(); ?>" class="c-card__meta-title"><?php echo get_the_title(); ?></a>
        
        <?php $price = get_field('pret'); if($price) : ?>
        <div class="c-card__meta-button fx">
            <a href="<?php echo get_the_permalink(); ?>" class="btn btn--primary btn--outline">
                <span><?php echo $price; ?> RON
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                </span>
            </a>
        </div>
        <?php endif; ?>
    </div>
</div>