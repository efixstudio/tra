<?php get_header(); ?>

<?php 

    include get_theme_file_path( 'flexible-content/parts/singles/antrenori-before-flexible.php' ); 

    include get_theme_file_path( 'flexible-content/parts/singles/atlet-before-flexible.php' ); 

    include get_theme_file_path( 'flexible-content/parts/singles/blog-before-flexible.php' ); 

    flexible_content();

    include get_theme_file_path( 'flexible-content/parts/singles/blog-after-flexible.php' ); 

    include get_theme_file_path( 'flexible-content/parts/singles/tabere-before-flexible.php' ); 
    
?>

<?php get_footer(); ?>