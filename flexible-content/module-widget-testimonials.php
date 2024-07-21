<?php 
    $content = get_field('testimonials_g','options');
    $btn = $content['button'];
?>

<!-- testimonials -->
<section class="module module--testimonials bg bg--green u-pd u-pd--md">
    <div class="container">
        <?php if($content['title']) : ?>
        <div class="c-sh">
            <h2 class="c-sh__title"><?php echo $content['title']; ?></h2>
        </div>
        <?php endif; ?>

        <div class="c-ss c-ss--testimonials">
            <div class="u-ss u-ss--testimonials">
                <?php foreach($content['testimonials'] as $post) : ?>
                <div class="c-card c-card--testimonial">
                    <div class="c-card__header">
                        <span class="c-card__title"><strong><?php echo get_the_title($post->ID); ?></strong><?php $role = get_field('role', $post->ID); if($role) : echo ' / '. $role; endif; ?></span>
                        <?php if($btn['url']) : ?>
                            <a class="btn btn--underline btn--underline--white" href="<?php echo $btn['url']['url']; ?>">
                                <span><?php echo $btn['label']; ?></span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"/></svg>
                            </a>
                        <?php endif; ?>
                    </div>

                    <div class="c-card__text">
                        <?php $excerpt = get_field('short_description', $post->ID); if($excerpt) : ?>
                        <div class="c-editor">
                            <p><?php echo $excerpt; ?></p>
                        </div>
                        <?php endif; ?>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>

            <div class="c-ctrls is-white to-right"></div>
        </div>
    </div>
</section>
<!-- testimonials -->