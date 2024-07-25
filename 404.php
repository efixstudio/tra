<?php
get_header(); ?>
<section class="page-404">
    <div class="container">
        <div class="row">
            <div class="col col--1 ">
                <h1>ooops!</h1>
                <div href="<?php echo site_url();?>" class="back-404"  data-homepage="<?php echo site_url(); ?>">
                    <svg fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>
                    <span>Ai ajuns unde nu trebuie. <br/>Hai inapoi!</span>
                </div>
            </div>
            <div class="col col--2">
                <div class="error-img">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/error.png" />
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>
