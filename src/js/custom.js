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

          $(".privacy-notice__left-side").stick_in_parent({ container: $(".contentWrapper"), offset_top: 135 });
    
    },


};

// const loader = document.getElementById("pageLoader");
// const progressBar = document.querySelector(".loader-progress-bar");

// let progress = 0;

// if (loader) {
//   const loaderInterval = setInterval(() => {
//     progress += Math.floor(Math.random() * 5) + 1;

//     if (progress >= 100) {
//       progress = 100;
//       clearInterval(loaderInterval);

//       setTimeout(() => {
//         loader.classList.add("hide");
//       }, 300);
//     }

//     if (progressBar) {
//       progressBar.style.width = `${progress}%`;
//     }
//   }, 80);
// }

// document.addEventListener("DOMContentLoaded", () => {
//     gsap.registerPlugin(ScrollTrigger, ScrollSmoother);

//     const smoother = ScrollSmoother.create({
//         wrapper: "#smooth-wrapper",
//         content: "#smooth-content",
//         smooth: 1.6,
//         effects: true,
//     });
// });


