$ = jQuery.noConflict();

$(document).ready(function () {

    // RESIZE SLICK
	$(window).on('resize orientationchange', function() {
		$('.slick-slider').slick('resize');
	})

    $('.c-ss--partners').each(function () {
        // Get slick section
        var $slick= $(this);
        // Get slick posts
        var $slickPosts = $slick.find('.u-ss');
        // Get slick arrows
        var $slickPostsArrows = $slick.find('.c-ctrls');

        $(slickPosts).on('init', function(event, slick){
            $(slickPosts).slick()
        });

        // Init slick posts
        var slickPosts = $slickPosts.slick({
            infinite: false,
            dots: false,
            arrows: true,
            appendArrows: $slickPostsArrows,
            nextArrow: '<div class="c-ctrl c-ctrl--next"><svg xmlns="http://www.w3.org/2000/svg" width="20.417" height="35" viewBox="0 0 20.417 35"> <path id="Fill_1_Copy_3" data-name="Fill 1 Copy 3" d="M-17.909,0,0,17.5-17.909,35l-2.507-2.495L-5.059,17.5-20.417,2.493Z" transform="translate(0 35) rotate(-180)" fill="#2f4858"/></svg></div>',
            prevArrow: '<div class="c-ctrl c-ctrl--prev"><svg xmlns="http://www.w3.org/2000/svg" width="20.417" height="35" viewBox="0 0 20.417 35"> <path id="Fill_1_Copy_3" data-name="Fill 1 Copy 3" d="M-17.909,0,0,17.5-17.909,35l-2.507-2.495L-5.059,17.5-20.417,2.493Z" transform="translate(0 35) rotate(-180)" fill="#2f4858"/></svg></div>',
            slidesToShow: 5,
            slidesToScroll: 1,
        });
    });

    $('.c-ss--team').each(function () {
        // Get slick section
        var $slick= $(this);
        // Get slick posts
        var $slickPosts = $slick.find('.u-ss');
        // Get slick arrows
        var $slickPostsArrows = $slick.find('.c-ctrls');

        $(slickPosts).on('init', function(event, slick){
            $(slickPosts).slick()
        });

        // Init slick posts
        var slickPosts = $slickPosts.slick({
            infinite: false,
            dots: false,
            arrows: true,
            appendArrows: $slickPostsArrows,
            nextArrow: '<div class="c-ctrl c-ctrl--next"><svg xmlns="http://www.w3.org/2000/svg" width="20.417" height="35" viewBox="0 0 20.417 35"> <path id="Fill_1_Copy_3" data-name="Fill 1 Copy 3" d="M-17.909,0,0,17.5-17.909,35l-2.507-2.495L-5.059,17.5-20.417,2.493Z" transform="translate(0 35) rotate(-180)" fill="#2f4858"/></svg></div>',
            prevArrow: '<div class="c-ctrl c-ctrl--prev"><svg xmlns="http://www.w3.org/2000/svg" width="20.417" height="35" viewBox="0 0 20.417 35"> <path id="Fill_1_Copy_3" data-name="Fill 1 Copy 3" d="M-17.909,0,0,17.5-17.909,35l-2.507-2.495L-5.059,17.5-20.417,2.493Z" transform="translate(0 35) rotate(-180)" fill="#2f4858"/></svg></div>',
            slidesToShow: 3,
            slidesToScroll: 1,
            adaptiveHeight: true,
        });
    });

    $('.c-ss--testimonials').each(function () {
        // Get slick section
        var $slick= $(this);
        // Get slick posts
        var $slickPosts = $slick.find('.u-ss');
        // Get slick arrows
        var $slickPostsArrows = $slick.find('.c-ctrls');

        $(slickPosts).on('init', function(event, slick){
            $(slickPosts).slick()
        });

        // Init slick posts
        var slickPosts = $slickPosts.slick({
            dots: false,
            arrows: true,
            appendArrows: $slickPostsArrows,
            nextArrow: '<div class="c-ctrl c-ctrl--next"><svg xmlns="http://www.w3.org/2000/svg" width="20.417" height="35" viewBox="0 0 20.417 35"> <path id="Fill_1_Copy_3" data-name="Fill 1 Copy 3" d="M-17.909,0,0,17.5-17.909,35l-2.507-2.495L-5.059,17.5-20.417,2.493Z" transform="translate(0 35) rotate(-180)" fill="#2f4858"/></svg></div>',
            prevArrow: '<div class="c-ctrl c-ctrl--prev"><svg xmlns="http://www.w3.org/2000/svg" width="20.417" height="35" viewBox="0 0 20.417 35"> <path id="Fill_1_Copy_3" data-name="Fill 1 Copy 3" d="M-17.909,0,0,17.5-17.909,35l-2.507-2.495L-5.059,17.5-20.417,2.493Z" transform="translate(0 35) rotate(-180)" fill="#2f4858"/></svg></div>',
            slidesToShow: 1,
            slidesToScroll: 1,
            adaptiveHeight: true,
        });
    });

    $('.c-ss--latest').each(function () {
        // Get slick section
        var $slick= $(this);
        // Get slick posts
        var $slickPosts = $slick.find('.u-ss');
        // Get slick arrows
        var $slickPostsArrows = $slick.find('.c-ctrls');

        $(slickPosts).on('init', function(event, slick){
            $(slickPosts).slick()
        });

        // Init slick posts
        var slickPosts = $slickPosts.slick({
            dots: false,
            arrows: true,
            appendArrows: $slickPostsArrows,
            nextArrow: '<div class="c-ctrl c-ctrl--next"><svg xmlns="http://www.w3.org/2000/svg" width="20.417" height="35" viewBox="0 0 20.417 35"> <path id="Fill_1_Copy_3" data-name="Fill 1 Copy 3" d="M-17.909,0,0,17.5-17.909,35l-2.507-2.495L-5.059,17.5-20.417,2.493Z" transform="translate(0 35) rotate(-180)" fill="#2f4858"/></svg></div>',
            prevArrow: '<div class="c-ctrl c-ctrl--prev"><svg xmlns="http://www.w3.org/2000/svg" width="20.417" height="35" viewBox="0 0 20.417 35"> <path id="Fill_1_Copy_3" data-name="Fill 1 Copy 3" d="M-17.909,0,0,17.5-17.909,35l-2.507-2.495L-5.059,17.5-20.417,2.493Z" transform="translate(0 35) rotate(-180)" fill="#2f4858"/></svg></div>',
            slidesToShow: 4,
            slidesToScroll: 1,
        });
    });
})