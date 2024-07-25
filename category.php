<?php get_header(); ?>

<?php $object = get_queried_object(); ?>

<section class="module module--ph u-mg u-mg--md">
    <div class="container">
        <div class="c-text">
            <h1 class="c-text__title lg"><?php echo $object->name; ?></h1>

            <div class="c-scroll">
                <span>scroll to discover</span>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
            </div>
        </div>
    </div>
</section>

<?php include get_theme_file_path( 'flexible-content/module-listing-blog.php' ); ?>

<?php get_footer(); ?>