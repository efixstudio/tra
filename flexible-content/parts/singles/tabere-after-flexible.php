<?php if($post->post_type === 'tabere') : ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <!-- comments -->
        <section class="module module--comments u-mg u-mg--sm">
            <div class="container">
                <?php 
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                ?>
            </div>
        </section>
        <!-- comments -->
    <?php endwhile; ?>
<?php endif; ?>