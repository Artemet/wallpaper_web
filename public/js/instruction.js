/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!******************************************!*\
  !*** ./resources/js/page/instruction.js ***!
  \******************************************/
//number_animation
var get_span = document.querySelectorAll(".instruction_container .wallpaper_information .span");
window.addEventListener('scroll', function () {
  var display_height = window.innerHeight;
  get_span.forEach(function (item) {
    if (pageYOffset > item.offsetTop - display_height) {
      item.classList.add("span_animation");
    }
  });
});
/******/ })()
;