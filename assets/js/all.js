// $(window).scroll(function () {
//     if ($(this).scrollTop() > 40) {
//         $('.navbar').addClass("fixed-top");
//         // add padding top to show content behind navbar
//         // $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
//     } else {
//         $('.navbar').removeClass("fixed-top");
//         // remove padding top from body
//         // $('body').css('padding-top', '0');
//     }
// });

window.onscroll = function () {
    var e = document.querySelector(".navbar");
    e.offsetTop < window.pageYOffset ? e.classList.add("fixed-top") : e.classList.remove("fixed-top")
}