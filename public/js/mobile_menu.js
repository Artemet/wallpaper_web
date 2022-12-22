/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!********************************************************!*\
  !*** ./resources/js/layouts_animations/mobile_menu.js ***!
  \********************************************************/
//mobile_menu
var get_mobile_img = document.querySelector(".header_line .mobile_wrapper img");
var get_sub_menu_mobile = document.querySelector(".header_line .mobile_wrapper .sub_menu");
var get_mobile_line = document.querySelector(".mobile_line");

window.get_mobile_menu = function () {
  get_mobile_img.classList.toggle("animation");
  get_sub_menu_mobile.classList.toggle("sub_menu_animation");
  setTimeout(function () {
    get_mobile_line.classList.add("line_animation");
  }, 300);
};
/******/ })()
;