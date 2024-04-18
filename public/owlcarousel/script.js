
$('.owl-carousel').owlCarousel({
    autoplay: true,
    autoplaytimeout: 100,
    autoplayhoverpause: true,
    loop: true,
    // margin: 25,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        480: {
            items: 2,
            nav: false
        },
        768: {
            items: 4,
            // nav:true,
            loop: true
        }
    }
})
