$ = jQuery.noConflict();

$(document).ready(function () {

    $("#burger").click(function(){
        event.preventDefault();
        $(this).toggleClass('is-opened');
		$('.c-mmenu').toggleClass('is-active');
        $('.c-headroom').toggleClass('menu-opened');
        $('.c-main').toggleClass('is-hidden');
	});

    $(window).scroll(function() {    
		var scroll = $(window).scrollTop();

		if (scroll >= 10) {
			$(".c-headroom").addClass("is-scrolled");
		} else {
			$(".c-headroom").removeClass("is-scrolled");
		}
	});


    // start fancybox:
	$(".gallery a").fancybox();


    $(".c-header__menu .menu .menu-item-has-children").each( function( index, element ){
		$(this).closest('.menu-item').find('a:first').append('<span class="submenu-toggle"><svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-chevron-down fa-w-14"><path fill="currentColor" d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z" class=""></path></svg></span>');
        $(this).closest('.menu-item').find('a:first').addClass('has-dropdown');
	})

    $(".c-mmenu .menu .menu-item-has-children").each( function( index, element ){
		$(this).closest('.menu-item').find('a:first').append('<span class="submenu-toggle"><svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-chevron-down fa-w-14"><path fill="currentColor" d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z" class=""></path></svg></span>');
        $(this).closest('.menu-item').find('a:first').addClass('has-dropdown');
	})

    $('.gfield--type-fileupload .ginput_container').wrapAll('<div class="btn-upload"></div>');

    $('.c-mmenu .submenu-toggle').click(function(){
		event.preventDefault();
		$(this).toggleClass('is-active');
		$(this).closest('.menu-item').find('.sub-menu').slideToggle();
	})

    // toggle events list
    $('.c-events .c-table-item .c-table-item__url').click(function(){
		event.preventDefault();
		$(this).toggleClass('is-active');
		$(this).closest('.c-table-row').find('.c-table-content').slideToggle();
	})

    $('.c-togglers .c-toggler').click(function(){
		event.preventDefault();
		$(this).toggleClass('is-active');
		$(this).closest('.c-toggler').find('.c-toggler__content').slideToggle();
	})

    // wrap first 3 testimonials cards
    $('.c-cards--testimonials > .c-card--testimonial:lt(3)').wrapAll('<div class="row"></div>');

    // wrap person title in span tags
    $('.c-card--person .c-card__meta h3').each(function() {
        var words = $(this).text().split(' ');
        $(this).empty().html(function() {
            for (i = 0; i < words.length; i++) {
                if (i == 0) {
                    $(this).append('<span>' + words[i] + '</span>');
                } else {
                    $(this).append(' <span>' + words[i] + '</span>');
                }
            }
        });
    });

    // Text togglers
    // $('.c-toggler .c-toggler__header').click(function(){
    //     $(this).closest('.c-toggler').find('.c-toggler__content').slideToggle();
    //     $(this).closest('.c-toggler').toggleClass('is-active');
    //     $(this).closest('.c-toggler').find('.c-toggler__icon').toggleClass('is-active');
    // })

    // tabs
    $('.c-nav--comunity .c-nav__item').click(function () {
		$(this).toggleClass('is-active');
	})

	$('.c-tabs-nav--comunity .c-tabs-nav__item:first-child').addClass('is-active');
	$('.c-tabs-nav--comunity .c-tabs-nav__item').on("click", function (e) {
		e.preventDefault();

		// Toggle active class on tab buttons
		$(this).addClass("is-active");
		$(this).siblings().removeClass("is-active");

		// display only active tab content
		var activeTab = $(this).attr("href");
		$('.c-tab-box').not(activeTab).hide();
		
		$(activeTab).show();
	});

    // tabs text togglers
    $('.c-ttogglers .c-navbar a:first-child').addClass('is-active');
	$('.c-ttogglers .c-navbar a').on("click", function (e) {
		e.preventDefault();

		// Toggle active class on tab buttons
		$(this).addClass("is-active");
		$(this).siblings().removeClass("is-active");

		// display only active tab content
		var activeTab = $(this).attr("href");
		$('.c-content').not(activeTab).hide();
		
		$(activeTab).show();
	});

    // tabs training plan
    $('.module--trainingplan .c-plan .c-nav__item:first-child').addClass('is-active');

    $('.module--trainingplan .c-plan .c-nav__item').on("click", function (e) {
		e.preventDefault();

		// Toggle active class on tab buttons
		$(this).addClass("is-active");
		$(this).siblings().removeClass("is-active");

		// display only active tab content
		var activeTab = $(this).attr("href");
		$('.module--trainingplan .c-plan-content.is-single').not(activeTab).hide();
		
		$(activeTab).show();
	});

    $('.module--trainingplan .c-plan .c-nav--coaches .c-nav__item').on("click", function (e) {
		e.preventDefault();

		// Toggle active class on tab buttons
		$(this).addClass("is-active");
		$(this).siblings().removeClass("is-active");

		// display only active tab content
		var activeTab = $(this).attr("href");
		$('.module--trainingplan .item').not(activeTab).hide();
		
		$(activeTab).show();
	});

    // delay slick sliders
    setTimeout(function () {
		$('.c-ss').addClass('is-visible');
        $('.module--comments').addClass('is-visible');
	}, 200);

    // comment form layout 
    $(".comment-form .comment-form-author, .comment-form .comment-form-email, .comment-form .comment-form-url").wrapAll("<div class='row row--left'></div>");
    $('.comment-form .comment-form-comment').wrapAll("<div class='row row--right'></div>");
    $('.comment-form .comment-form-cookies-consent, .comment-form .form-submit').wrapAll("<div class='row row--bottom'></div>");
    $('.comment-form .row--left, .comment-form .row--right').wrapAll('<div class="inner"></div>');

    // comment counter
    var commentCount = $('.commentlist').find('.comment').length;
    if( commentCount === 1) {
        $('#comments').text(commentCount + ' comentariu');
    } else {
        $('#comments').text(commentCount + ' comentarii');
    }

    // comment list item layout
    $(".commentlist .comment").each( function( index, element ){
        var commentAuthor = $(this).find('.comment-author cite').text();
        var commentAuthorAvatar = $(this).find('.comment-author img').attr('src');
        var commentMeta = $(this).find('.comment-meta').html();
        var commentBody = $(this).find('.comment-body').html();

        $(this).append(`
            <div class="u-cols">
                <div class="u-col u-col--left">
                    <div class="author">
                        <div class="author-avatar">
                            <img src="`+ commentAuthorAvatar +`">
                        </div>
                        
                        <div class="author-meta">
                            <span>`+ commentMeta +`</span>
                            <span>`+ commentAuthor +`</span>
                        </div>
                    </div>
                </div>

                <div class="u-col u-col--right">
                    `+ commentBody +`
                </div>
            </div>
        `);
    })

    // comment form submit button text
    $('.module--comments .row--bottom p.form-submit input').val('TRIMITE MESAJ');

    // wrap divs in rows
    var divs = $(".c-cards--partners > .c-card");
    for(var i = 0; i < divs.length; i+=3) {
        divs.slice(i, i+3).wrapAll("<div class='row'></div>");
    }

    // wrap blog articles in rows
    var divs = $(".c-cards--blog > .c-card");
    for(var i = 0; i < divs.length; i+=3) {
        divs.slice(i, i+3).wrapAll("<div class='row'></div>");
    }

    // wrap divs in rows
    var divs = $(".c-cards--camp > .c-card");
    for(var i = 0; i < divs.length; i+=2) {
        divs.slice(i, i+2).wrapAll("<div class='row'></div>");
    }

    $lastRow = $('.c-cards--partners .row').last();
	$lastRowCount = $lastRow.children().length;
	if($lastRowCount <= 3) {
		$lastRow.addClass('is-last');
	}
});

/*--------------------------------------------------------------
# Gravity forms, labels effect on focus
--------------------------------------------------------------*/
jQuery(document).on('gform_post_render', function () {
    $('.u-form--email .gform_footer').append('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>');
})