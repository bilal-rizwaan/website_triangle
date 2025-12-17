jQuery(document).ready(function () { jQuery("#brand_logo").owlCarousel({ loop: !0, items: 7, nav: !1, dots: !1, autoplay: !0, slideTransition: "linear", autoplaySpeed: 2e3, smartSpeed: 2e3, center: !0, responsive: { 0: { items: 1 }, 600: { items: 3 }, 1e3: { items: 4 } } }), jQuery("#brand_logo").trigger("play.owl.autoplay", [2e3]), setTimeout(function o() { jQuery("#brand_logo").trigger("play.owl.autoplay", [6e3]) }, 1e3) }), $("#portfolio").owlCarousel({ loop: !0, items: 5, nav: !1, dots: !1, autoplay: !0, slideTransition: "linear", autoplaySpeed: 3e3, smartSpeed: 3e3, responsive: { 0: { items: 1 }, 600: { items: 3 }, 1e3: { items: 5 } } }), $("#reviews").owlCarousel({ loop: !0, items: 3, nav: !1, margin: 30, dots: !1, autoplay: !0, slideTransition: "linear", autoplaySpeed: 3e3, smartSpeed: 3e3, responsive: { 0: { items: 1 }, 600: { items: 2 }, 1e3: { items: 3 } } }), $(document).ready(function () { 831 >= $(window).width() && ($(".nav-link.dropdown-toggle").removeAttr("data-bs-hover"), $(".nav-link.dropdown-toggle").attr("data-bs-toggle", "dropdown")) });

$('.testi-slider').owlCarousel({
    loop: true,               
    margin: 20,                
    autoplay: true,            
    autoplayTimeout: 3000,     
    autoplayHoverPause: true,  
    smartSpeed: 800,           
    dots: true,                
    nav: false,              
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 2,
        },
        1000: {
            items: 2,
        }
    }
});

