<?php 
        global $post; 

        $object = get_queried_object();
        $paged  = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $author_nicename = isset( $_GET['author'] ) && ! empty( $_GET['author'] ) ?  $_GET[ 'author']  :  false;

        $args = array(  
            'post_type'         => 'post',
            'post_status'       => 'publish',
            'posts_per_page'    => 7,
            'paged'             => $paged,
        );

        if( $author_nicename ){
            $user = get_user_by( 'slug',  $author_nicename);
            if( $user ) $args['author'] = $user->ID;
        }

        $cat_slug = false;
        if( $object instanceof WP_Term ){
            $cat_slug = $object->slug;
            $args['cat'] = $object->term_id;
        }

        $loop = new WP_Query( $args );

        $get_blog_URL = get_general_page_url('general_pages', 'blog' );

        $author_URL_parameter = $author_nicename ? "?author=" . $author_nicename : '';

?>

<!-- listing blog -->
<section class="module module--listing u-mg u-mg--md">
    <div class="c-navbars c-navbars--blog">
        <nav class="c-nav-blog c-nav-blog--categories">
            <div class="container">
                <?php $cats = get_terms('category'); if($cats) : ?>
                    <nav class="c-cats custom-scrollbar">
                        <a href="<?php echo $get_blog_URL && is_array( $get_blog_URL )  ? $get_blog_URL['url'] . $author_URL_parameter : "#"; ?>" class="c-cat <?php echo ! $cat_slug ? 'is-active' : ''; ?>">Toate articolele</a>
                        <?php foreach($cats as $cat) : ?>
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?><?php echo $cat->taxonomy; ?>/<?php echo $cat->slug;?>/<?php echo $author_URL_parameter; ?> " class="c-cat <?php echo $cat_slug ===  $cat->slug ? 'is-active' : ''; ?>"><?php echo $cat->name; ?></a>
                        <?php endforeach; ?>
                    </nav>
                <?php endif; ?>
            </div>
        </nav>

        <nav class="c-nav-blog c-nav-blog--authors">
            <div class="container">
                <nav class="c-cats custom-scrollbar">

                    <?php
                            $args = [
                                'role__in' => ['administrator', 'author', 'editor' ],
                            ];
                            $authors = get_users( $args );

                            $current_uri = home_url( add_query_arg( NULL, NULL ) );
                            foreach( $authors as $author ) {
                                $post_count = count_user_posts($author->ID);
                                if( intval( $post_count ) === 0) continue;
                                echo '<a href="' . str_replace( site_url() , '', explode( "?", $current_uri )[0] ) . ( $author->data->user_nicename !== $author_nicename ? "?author=" . $author->data->user_nicename : '' ) . '" class="c-cat ' . ( $author_nicename === $author->data->user_nicename ? 'is-active' : '' ) . '">' . $author->display_name . '</a>';
                            }

                    ?>
                    <?php $authors = get_users(); foreach($authors as $author) : ?>
                        <?php if($author->ID != 1) : ?>

                        <?php endif; ?>
                    <?php endforeach; ?>
                </nav>
            </div>
        </nav>
    </div>
    
    <div class="container">
        <?php if( $loop->have_posts() ): ?>
        <div class="c-cards c-cards--blog fx fx--sb fx--wrap">
            <?php
                $blogItemCounter = 0;
                $countPosts = $loop->post_count;

                while ( $loop->have_posts() ) : $loop->the_post();
                    $blogItemCounter++;
                    include get_theme_file_path( 'flexible-content/parts/cards/card-blog.php' );
                endwhile;
            ?>
        </div>
        <?php else: ?>
        <h3>Niciun rezultat pentru selectia facuta.</h3>
        <?php endif; wp_reset_postdata();?>
        <div class="pagination">
            <?php echo custom_loop_pagination( $loop ); ?>
        </div>
    </div>
</section>
<!-- listing blog -->