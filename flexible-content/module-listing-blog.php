<?php 
        global $post; 

        $args = array(  
            'post_type' => 'post',
            'post_status' => 'publish',
            'posts_per_page' => 7,
        );
    
        $loop = new WP_Query( $args );
?>

<!-- listing blog -->
<section class="module module--listing u-mg u-mg--md">
    <div class="c-navbars c-navbars--blog">
        <nav class="c-nav-blog c-nav-blog--categories">
            <div class="container">
                <?php $cats = get_terms('category'); if($cats) : ?>
                    <nav class="c-cats">
                        <a href="#" class="c-cat is-active">Toate articolele</a>
                        <?php foreach($cats as $cat) : ?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?><?php echo $cat->taxonomy; ?>/<?php echo $cat->slug; ?>" class="c-cat"><?php echo $cat->name; ?></a>
                        <?php endforeach; ?>
                    </nav>
                <?php endif; ?>
            </div>
        </nav>

        <nav class="c-nav-blog c-nav-blog--authors">
            <div class="container">
                <nav class="c-cats">
                    <?php $authors = get_users(); foreach($authors as $author) : ?>
                        <?php if($author->ID != 1) : ?>
                            <a href="#" class="c-cat"><?php echo $author->display_name; ?></a>
                        <?php endif; ?>
                    <?php endforeach; ?>
                </nav>
            </div>
        </nav>
    </div>
    
    <div class="container">
        <div class="c-cards c-cards--blog fx fx--sb fx--wrap">
            <?php  
                while ( $loop->have_posts() ) : $loop->the_post();
                    include get_theme_file_path( 'flexible-content/parts/cards/card-blog.php' );
                endwhile; wp_reset_postdata(); 
            ?>
        </div>
    </div>
</section>
<!-- listing blog -->