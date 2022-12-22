/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************************!*\
  !*** ./resources/js/page/text_animation.js ***!
  \*********************************************/
var get_div_animation = document.querySelectorAll(".text_animation div");
window.addEventListener('scroll', function () {
  var display_height = window.innerHeight;
  get_div_animation.forEach(function (item) {
    if (pageYOffset > item.offsetTop - display_height) {
      item.classList.add("animation");
    }
  });
});
/******/ })()
;