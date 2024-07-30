<?php
    $blogItemCounter = $blogItemCounter ?? 'single';
    $countPosts = $countPosts ?? false;

    ?>
<div class="c-card c-card--blog c-card--blog-item-<?php echo $blogItemCounter; ?>" data-total-posts="<?php echo $countPosts; ?>">
    <div class="c-card__header">
        <span>
            <?php if( $blogItemCounter === 1 ): ?>
                 <strong><?php echo __('Cel mai recent', 'trailrunningacademy'); ?></strong>
            <?php else: ?>
                <strong>In:</strong>
                <?php
                    $terms = get_the_terms( $post->ID, 'category' );
                    $term_names = array_map( function($n){ return $n->name; }, $terms );
                    echo implode( ', ', $term_names );
                ?>
            <?php endif; ?>
        </span>

        <span><?php echo  get_the_date('d.m.Y'); ?></span>
    </div>

    <div class="c-card__box">
        <a href="<?php the_permalink(); ?>" class="c-card__image">
            <?php the_post_thumbnail('original-600'); ?>
        </a>

        <div class="c-card__title">
            <a href="<?php the_permalink(); ?>" class="title"><?php the_title(); ?></a>
        </div>


    </div>
    <div class="c-card__footer">
        <?php if( $blogItemCounter === 1 ): ?>
            <span class="c-card__footer_cat">
                        <strong>In:</strong>
                        <?php
                        $terms = get_the_terms( $post->ID, 'category' );
                        $term_names = array_map( function($n){ return $n->name; }, $terms );
                        echo implode( ', ', $term_names );
                        ?>
                    </span>
        <?php endif; ?>

        <a class="url" href="<?php the_permalink(); ?>">
            <strong>Citeste</strong>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
        </a>
    </div>
</div>