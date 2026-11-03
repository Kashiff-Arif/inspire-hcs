$(document).ready(function () {
    hcs.init({

    });
});

var self1;

var hcs = {
    init: function (options) {
        this.settings = options;

        self1 = this;
        this.utilities();
    },

    utilities: function () {

      $('.services-intro__nav a[href^="#"]').on('click', function (e) {
        e.preventDefault();

        const target = $(this).attr('href');

        if ($(target).length) {
            $('html, body').animate({
                scrollTop: $(target).offset().top
            }, 600);
        }
    });
          $('select').niceSelect();

             $(".stick-col .sectionHead").stick_in_parent({
                parent: ".services__wrapper",
                offset_top: 100
            });
          $(".privacy-notice__left-side").stick_in_parent({ container: $(".contentWrapper"), offset_top: 135 });
          

       const swiper = new Swiper('.swiper', {
            effect: "fade",
            fadeEffect: {
                crossFade: true,
            },
             spaceBetween: 10,
            speed: 1000,

            autoHeight: true,

            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    
    },


};


// document.addEventListener("DOMContentLoaded", () => {
//     gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

//     const smoother = ScrollSmoother.create({
//         wrapper: "#smooth-wrapper",
//         content: "#smooth-content",
//         smooth: 1.6,
//         effects: true,
//     });
// });


