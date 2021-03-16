/* Main scripts */
if (window.location.pathname === '/') { // Remove default class container from homepage only
    $('.main-container').removeClass('container')
}
/* End Main scripts */

/* Homepage banner */
let slideIndex = 0;
autoSlides();
let autoSlidesTimeout = setInterval(autoSlides, 5000);

function plusSlides(n) {
    showSlides(slideIndex += n);
}

function currentSlide(n) {
    showSlides(slideIndex = n);
}

function showSlides(n) {
    const slides = $(".my-slides");

    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    slides.hide();
    $(slides[slideIndex - 1]).show();
    $(".gg-slider-thumbnail, .mobile-slider-bullet-item").removeClass('selected');
    $(`.gg-slider-thumbnail:nth-child(${slideIndex}), .mobile-slider-bullet-item:nth-child(${slideIndex})`)
        .addClass('selected');
}

function autoSlides() {
    slideIndex++;
    showSlides(slideIndex);
}

$('.gg-slider-thumbnail, .mobile-slider-bullet-item').mouseover(function () {
    $(this).addClass('selected').siblings().removeClass('selected');
    slideIndex = $(this).index() + 1;
    showSlides(slideIndex);
})
/* End Homepage banner */

/* Desktop header */
$('input[name=keyword]').focus(function () { // Search input focus
    $('.header-search-container').addClass('focused')
    $('.search-overlay').show()
})

$('.header-search-container button').hover(function () { // Change header search input border
    $('input[name=keyword]').toggleClass('hovered')
})

$('.search-overlay, .top-wrapper img').click(function () { // Hide focus & overlay
    $('.header-search-container').removeClass('focused')
    $('.styled-mobile-menu').css({top: '100vh', 'z-index': 'initial'})
    $('.search-overlay').hide()
    $('body').css({overflow: 'initial'})
})

$('.horizontal-menu-item').hover(function () { // Toggle horizontal menu mask
    if ($(this).is(":hover")) {
        $('.horizontal-menu-mask').show()
    } else {
        $('.horizontal-menu-mask').hide()
    }
})
/* End Desktop header */

/* Mobile header */
$('.mobile-menu-toggler').click(function () { // Show mobile navigation
    $('.styled-mobile-menu').css({top: '5rem', 'z-index': 9999})
    $('body').css({overflow: 'hidden'})
    $('.search-overlay').show()

    $('.mobile-menu-heading').click(function () { // Toggle mobile menu heading
        $(this).parent().toggleClass('minimized')
    })
})

$('.quick-browse-toggle-btn').click(function () { // Toggle show more quick browse links
    if ($(this).hasClass('toggled')) {
        $(this).removeClass('toggled').children('button').text(transSeeAll)
        $('.mobile-menu-list').css({height: '144px'})
    } else {
        $(this).addClass('toggled').children('button').text(transSeeLess)
        $('.mobile-menu-list').css({height: 'initial'})
    }
})

// Expand/Minimize & show/hide sub categories
$('.categories-accordion').on('click', '.categories-accordion-item', function () {
    const clickedItem = $(this)
    if (clickedItem.parent().hasClass('expand')) {
        clickedItem.parent().removeClass('expand')
        clickedItem.siblings('.categories-accordion-panel').hide()
    } else {
        let categoryId = clickedItem.attr('id')
        if (typeof categoryId !== 'undefined' && categoryId !== false) {
            categoryId = categoryId.substring(3)
            $.ajax({
                type: 'get',
                url: '/class/getcats/'+ categoryId,
                success: function (response) {
                    response.forEach(function (category, index) {
                        // if(category.numAdvs>0){
                        if (!category.hasChild) {
                            clickedItem.siblings('.categories-accordion-panel').append(`
                                <div>
                                    <a href="/c/${category.slug}" class="link-unstyled d-flex align-items-center justify-content-between categories-accordion-item">
                                        <p class="text-truncate">${category.name}</p>
                                    </a>
                                </div>
                            `)
                        } else {
                            clickedItem.siblings('.categories-accordion-panel').append(`
                                <div>
                                    <div id="cat${category.id}" class="d-flex align-items-center justify-content-between categories-accordion-item">
                                        <p class="text-truncate">${category.name}</p>
                                        <img src="${downloadSVG}" alt="arrow">
                                    </div>
                                    <div class="categories-accordion-panel"></div>
                                </div>
                            `)
                        }
                        // }
                    })
                    clickedItem.parent().addClass('expand').siblings().removeClass('expand')
                        .children('.categories-accordion-panel').hide()
                    clickedItem.removeAttr('id').siblings('.categories-accordion-panel').show()
                }
            })
        } else {
            clickedItem.parent().addClass('expand').siblings().removeClass('expand')
                .children('.categories-accordion-panel').hide()
            clickedItem.siblings('.categories-accordion-panel').show()
        }
    }
})
/* End Mobile header */

/* Categories tab */
$('.category-list a').click(function () { // Show category's related products
    const clickedItem = $(this)
    if (!clickedItem.hasClass('active')) {
        let categoryId = clickedItem.attr('id')
        if (typeof categoryId !== 'undefined' && categoryId !== false) {
            categoryId = categoryId.substring(3)
            $.ajax({
                type: 'get',
                url: '/ajax/get-advs-by-category/'+ categoryId,
                success: function (response) {
                    response.forEach(function (adv, index) {
                        const tabPaneID = clickedItem.attr('aria-controls')
                        $(`#${tabPaneID} > .your-choices-slider`).append(`
                            <a href="${adv.detail_url}" class="link-unstyled swiper-slide deal-slider-item">
                                <div class="deal-img"
                                     style="background-image: url('${adv.cover_photo}')"></div>
                                <p class="deal-name">${adv.name}</p>
                                <p class="deal-price">${adv.price} ${adv.currency}</p>
                            </a>
                        `)
                    })
                    clickedItem.removeAttr('id')
                }
            })
        }
    }
})
/* End Categories tab */

/* Swiper */
$(document).ready(function(){
    var dailyDealSwiper = new Swiper('.daily-deal-slider', {
        slidesPerView: 1.2,
        slidesPerGroup: 1,
        spaceBetween: 20,
        navigation: {
            nextEl: '.daily-deal-slider .gg-slider-button-next',
            prevEl: '.daily-deal-slider .gg-slider-button-prev',
        },
        breakpoints: {
            576: {
                slidesPerView: 2.2,
                slidesPerGroup: 2,
            },
            768: {
                slidesPerView: 3.2,
                slidesPerGroup: 3,
            },
            992: {
                slidesPerView: 4.2,
                slidesPerGroup: 4,
            },
            1200: {
                slidesPerView: 5.2,
                slidesPerGroup: 5,
            },
        }
    });

    var yourChoicesSwiper = new Swiper('.your-choices-tab', {
        slidesPerView: 1.2,
        slidesPerGroup: 1,
        spaceBetween: 20,
        observer: true,
        observeParents: true,
        navigation: {
            nextEl: '.your-choices-tab .gg-slider-button-next',
            prevEl: '.your-choices-tab .gg-slider-button-prev',
        },
        breakpoints: {
            576: {
                slidesPerView: 2.2,
                slidesPerGroup: 2,
            },
            768: {
                slidesPerView: 3.2,
                slidesPerGroup: 3,
            },
            1200: {
                slidesPerView: 4.2,
                slidesPerGroup: 4,
            },
        }
    });

    var whatYouLookingSwiper = new Swiper('.what-you-looking-slider', {
        slidesPerView: 1,
        slidesPerGroup: 1,
        spaceBetween: 20,
        breakpoints: {
            768: {
                slidesPerView: 2,
                slidesPerGroup: 2,
            },
            992: {
                slidesPerView: 3,
                slidesPerGroup: 3,
            },
        }
    });
});
/* End Swiper */