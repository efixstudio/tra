$ = jQuery.noConflict();

$(document).ready(function () {
    const windowWidth = window.outerWidth;

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
    $(".c-mmenu .menu .sub-menu .menu-item:not(.menu-item-has-children)").each( function( index, element ){
        $(this).closest('.menu-item').find('a:first').append('<svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-down" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="svg-inline--fa fa-chevron-down fa-w-14"><path fill="currentColor" d="M441.9 167.3l-19.8-19.8c-4.7-4.7-12.3-4.7-17 0L224 328.2 42.9 147.5c-4.7-4.7-12.3-4.7-17 0L6.1 167.3c-4.7 4.7-4.7 12.3 0 17l209.4 209.4c4.7 4.7 12.3 4.7 17 0l209.4-209.4c4.7-4.7 4.7-12.3 0-17z" class=""></path></svg></span>');
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

    const pageTabParameter = 'page-tab';
    const pageTabDataParameter = 'data-toggler-slug';

    const getURLQueryVariable = (variable) => {
        const query = window.location.search.substring(1);
        const vars = query.split('&');
        for (let i = 0; i < vars.length; i++) {
            const pair = vars[i].split('=');
            if (pair[0] === variable) {
                return decodeURIComponent(pair[1]); // Decode the value
            }
        }
        return false;
    }

    $('.c-ttogglers .c-navbar a:first-child').addClass('is-active');
	$('.c-ttogglers .c-navbar a').on("click", function (e) {
		e.preventDefault();

        if( $(this) === $('.c-ttogglers .c-navbar a.is-active') )
            return;

        // Update URL with page tab parameter value (extracted from clicked link attribute)
        // For the first item in navbar, we will remove the parameter from link
        const currentURL = new URL(window.location.href);
        if( $( this ).is(":first-child") ){
            console.log( "A ");
            if (currentURL.searchParams.has(pageTabParameter)){
                currentURL.searchParams.delete(pageTabParameter);

            }
        }else{
            const parameterValue = $(this).attr(pageTabDataParameter)
            if (currentURL.searchParams.has(pageTabParameter)) {
                // Replace the existing value
                currentURL.searchParams.set(pageTabParameter, parameterValue);
            } else {
                // Add the parameter
                currentURL.searchParams.append(pageTabParameter, parameterValue);
            }
        }

        window.history.pushState(null, null, currentURL.toString());

		// Toggle active class on tab buttons
		$(this).addClass("is-active");
		$(this).siblings().removeClass("is-active");

		// display only active tab content
		var activeTab = $(this).attr("href");
		$('.c-content').not(activeTab).hide();
		
		$(activeTab).show();
	});


    // Page tab toggler menu (as seen on legal pages) trigger content change if a
    // valid parameter found in link matches a navbar from the menu (based on link's
    // data attribute
    // Trigger click on that nav item if found
    const urlTabTogglerVar = getURLQueryVariable('page-tab');

    if( urlTabTogglerVar ){
        const getTargetPageTab = document.querySelector(`[${pageTabDataParameter}="${urlTabTogglerVar}"]`);
        if( getTargetPageTab ){
            getTargetPageTab.click();
        }
    }

    // tabs training plan
    //$('.module--trainingplan .c-plan .c-nav__item:first-child').addClass('is-active');
    //all-plans-filter ,c-nav--coaches, c-nav--periods

    const allPlansFilter = {
        coach: null,
        period: null
    };

    $('.module--trainingplan .c-plan .all-plans-filter .c-nav__item').on("click", function (e) {
        e.preventDefault();


        const   btnTypes = ['coach', 'period'],
                btnType = this.hasAttribute('data-coach') ? 'coach': 'period',
                isActive = this.classList.contains('is-active'),
                otherFilters = btnTypes.filter( (entry) => entry !== btnType ),
                attr = this.getAttribute('data-item'),
                sectionParent = this.closest('.module--trainingplan'),
                allItems = sectionParent.querySelectorAll( '.c-plan-content' ),
                itemsContainer = sectionParent.querySelector( '.c-plan-body .container' );

        //Update allPlansFilter according to the selected options
        if( isActive ){
            allPlansFilter[`${btnType}`] = null;

        }else{
            allPlansFilter[`${btnType}`] = this.getAttribute('data-item');
        }

        //Update allPlansFilter with the rest of the filters values
        otherFilters.forEach( (filter) => {
            const item = sectionParent.querySelector(`.c-nav__item.is-active[data-${filter}="true"]`);
            if( item ){
                allPlansFilter[`${filter}`] = item.getAttribute('data-item');
            }
        });

        //Update is-active btn
        this.parentElement.querySelectorAll('a').forEach((a) => {
            if( a !== this )
                a.classList.remove('is-active')
        });
        this.classList.toggle('is-active');

        //Construct the selector to query the DOM
        const selectorItem =`${allPlansFilter.coach !== null ? '[data-coach="' + allPlansFilter.coach + '"]': ''}${allPlansFilter.period !== null ? '[data-period="' + allPlansFilter.period + '"]': ''}`;

        //Get the items
        let getItems = [];
        if( selectorItem !=='' ){
            getItems = sectionParent.querySelectorAll( selectorItem );
        }else{
            getItems = allItems;
        }
        getItems = [...getItems];

        //Update items visibility (hide all, show only those filtered)
        allItems.forEach( (item) => {
            item.classList.remove('is-active');
        });

        getItems.forEach( (item) => {
            item.classList.add('is-active');
        });

        if( getItems.length === 0 ){
            sectionParent.querySelector('.c-plan-content-error').classList.add('is-active');
        }else{
            sectionParent.querySelector('.c-plan-content-error').classList.remove('is-active');
        }
    });

    $('.module--trainingplan .c-plan .c-plan-header:not(.all-plans-filter) .c-nav__item').on("click", function (e) {
        e.preventDefault();

        if( this.classList.contains( 'is-active' ) ){
            console.log( this );
            $(this).removeClass("is-active");
            $('.module--trainingplan .c-plan-content.is-single').show();
        }else{
            // Toggle active class on tab buttons
            $(this).addClass("is-active");
            $(this).siblings().removeClass("is-active");

            // display only active tab content
            var activeTab = $(this).attr("href");
            $('.module--trainingplan .c-plan-content.is-single').not(activeTab).hide();

            $(activeTab).show();
        }

	});

    $('.module--trainingplan .c-plan .c-plan-header:not(.all-plans-filter) .c-nav--coaches .c-nav__item').on("click", function (e) {
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
    // var divs = $(".c-cards--partners > .c-card");
    // for(var i = 0; i < divs.length; i+=3) {
    //     divs.slice(i, i+3).wrapAll("<div class='row'></div>");
    // }

    // wrap blog articles in rows
    // var divs = $(".c-cards--blog > .c-card");
    // for(var i = 0; i < divs.length; i+=3) {
    //     divs.slice(i, i+3).wrapAll("<div class='row'></div>");
    // }

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

    //Scroll 1px if on page load window is scrolled
    //We do this to fix some issues with sticky element (+background) etc.
    const scrollY = window.scrollY;
    if( scrollY > 0 ){
        window.scrollTo(0,scrollY + 1);
    }

    function debounce(func, wait) {
        let timeout;
        return function(...args) {
            const later = () => {
                clearTimeout(timeout);
                func(...args);
            };
            clearTimeout(timeout);
            timeout = setTimeout(later, wait);
        };
    }


    /**
     *             nextArrow: '<div class="c-ctrl c-ctrl--next"><svg xmlns="http://www.w3.org/2000/svg" width="20.417" height="35" viewBox="0 0 20.417 35"> <path id="Fill_1_Copy_3" data-name="Fill 1 Copy 3" d="M-17.909,0,0,17.5-17.909,35l-2.507-2.495L-5.059,17.5-20.417,2.493Z" transform="translate(0 35) rotate(-180)" fill="#2f4858"/></svg></div>',
     *             prevArrow: '<div class="c-ctrl c-ctrl--prev"><svg xmlns="http://www.w3.org/2000/svg" width="20.417" height="35" viewBox="0 0 20.417 35"> <path id="Fill_1_Copy_3" data-name="Fill 1 Copy 3" d="M-17.909,0,0,17.5-17.909,35l-2.507-2.495L-5.059,17.5-20.417,2.493Z" transform="translate(0 35) rotate(-180)" fill="#2f4858"/></svg></div>',
     */

    const catsWrapperSelector = document.querySelectorAll('.c-cats');
    if( catsWrapperSelector.length > 0 ){
        const catsWrappers = [...catsWrapperSelector];
        catsWrappers.forEach( (catWrapper) => {
           const sizes = catWrapper.getBoundingClientRect();
           console.log( sizes );
        });
    }

    /** sticky **/
    const stickyElement = document.querySelector('.all-plans-filter');
    if( stickyElement ){
        let header = document.querySelector('.c-header');
        let headerHeight = header.getBoundingClientRect();
        window.addEventListener( 'resize', function(){
                header = document.querySelector('.c-header');
                headerHeight = header.getBoundingClientRect();
        });
        window.addEventListener('scroll', function() {

        });
        const handleStickyScroll = (e) => {

            if (window.scrollY > stickyElement.offsetTop - headerHeight.height - 2  ) {
                if( ! stickyElement.classList.contains('sticky-header-plans sticky-bg') ){
                    stickyElement.classList.add('sticky-header-plans');
                    stickyElement.classList.add('sticky-bg');
                }

            } else {
                stickyElement.classList.remove('sticky-header-plans');
                stickyElement.classList.remove('sticky-bg');
            }
        }

        window.addEventListener('scroll', debounce(handleStickyScroll, 50));
    }

    /**
     * Plans toggle visibiliy
     */

    // Plans fix height issues (different height)
    const getPlansSections = document.querySelectorAll('.c-plans.is-active');

    window.addEventListener('resize', function(){
        const getPlansSections = document.querySelectorAll('.c-plans.is-active');
        resizeCardsOnLoad(getPlansSections);
    })

    const resizeCardsToEqualSizes = ( plans ) => {
        let maxPlanHeight = 0;
        const planInfoCards = plans.querySelectorAll('.c-card--info');
        if( planInfoCards.length > 0 ){
            [...planInfoCards].forEach( (card) => {
                //reset card style height
                card.style = "";
                const sizes = card.getBoundingClientRect();
                if( sizes.height > maxPlanHeight ) maxPlanHeight = sizes.height;
            });

            [...planInfoCards].forEach( (card) => {
                const sizes = card.getBoundingClientRect();
                console.log( card, sizes.height, maxPlanHeight );
                if( sizes.height < maxPlanHeight ){
                    card.style.flex = `1 0 ${parseInt( maxPlanHeight - 1 )}px`;
                    card.style.maxHeight = `${parseInt( maxPlanHeight - 1 )}px`;
                }

            });
        }
    }

    $('.c-plans__header').on("click", function(e){
        e.preventDefault();
        const element = this;
        const plans = element.closest('.c-plans');
        plans.classList.toggle('is-active');
        if( plans.classList.contains('is-active' ) )
            resizeCardsToEqualSizes(plans);
    });

    const resizeCardsOnLoad = ( planSections) => {
        if( planSections.length > 0 ){
            [...planSections].forEach( ( planSection ) => {
                if( planSection.classList.contains('is-active' ) ){
                    resizeCardsToEqualSizes(planSection);
                }
            });
        }
    }
    resizeCardsOnLoad(getPlansSections);


    //404 page
    const back404Btn = document.querySelector('.back-404');

    const handleBack404 = (e) => {
        e.preventDefault();
        const currentEl = e.currentTarget;
        const previousPageUrl = document.referrer;
        if( previousPageUrl && previousPageUrl.includes( currentEl.getAttribute('data-homepage') ) ){
            window.location.href = previousPageUrl;
        }else{
            window.location.href = currentEl.getAttribute('data-homepage');
        }
    }
    if( back404Btn ){
        back404Btn.addEventListener( 'click', handleBack404 );
    }

});


/** @todo DELETE */
// document.addEventListener("DOMContentLoaded", function() {
//     const elements = document.querySelectorAll("*"); // Select all elements
//     console.log( "A");
//     elements.forEach(element => {
//         if (element.scrollWidth > element.clientWidth) {
//             console.log("Element causing horizontal scroll:", element);
//         }
//     });
// });

/*--------------------------------------------------------------
# Gravity forms, labels effect on focus
--------------------------------------------------------------*/
jQuery(document).on('gform_post_render', function () {
    $('.u-form--email .gform_footer').append('<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32"><path d="M 18.71875 6.78125 L 17.28125 8.21875 L 24.0625 15 L 4 15 L 4 17 L 24.0625 17 L 17.28125 23.78125 L 18.71875 25.21875 L 27.21875 16.71875 L 27.90625 16 L 27.21875 15.28125 Z"></path></svg>');
})