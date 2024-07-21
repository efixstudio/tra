<?php
$testimonialItemCounter = $testimonialItemCounter ?? 'single';
$countPosts = $countPosts ?? false;

?>
<div class="c-card c-card--testimonial v2 c-card--testimonial-item-<?php echo $testimonialItemCounter; ?>"  data-total-posts="<?php echo $countPosts; ?>">
    <div class="inner">
        <div class="c-card__head"><span></span><span class="c-card__date"><?php echo  get_the_date('d.m.Y'); ?></span></div>
        <div class="c-card__box">
            <div class="u-col u-col--left">
                <a href="<?php echo get_the_permalink(); ?>" class="c-card__image"><?php echo get_the_post_thumbnail(); ?></a>
            </div>
            <div class="u-col u-col--right">

                <a href="<?php echo get_the_permalink(); ?>" class="c-card__title"><?php echo get_the_title(); ?></a>
                <a href="<?php echo get_the_permalink(); ?>" class="c-card__url btn btn--primary btn--simple">
                    Citeste
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                </a>
            </div>
        </div>
    </div>
</div>