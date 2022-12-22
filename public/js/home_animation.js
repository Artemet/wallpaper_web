/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!****************************************!*\
  !*** ./resources/js/home_animation.js ***!
  \****************************************/
//sub_animation(more_color)
var button_see_all = document.querySelector(".filter_container .see_all");
var get_section_sub = document.querySelector(".filter_container .sub");
var get_a_achievements = document.querySelector(".filter_container p.under_information a.achievements");

window.get_sub = function () {
  setTimeout(function () {
    get_a_achievements.classList.add("animation_achievements");
  }, 500);
  button_see_all.classList.toggle("see_all_animation");
  get_section_sub.classList.toggle("section_sub_animation");
}; //wallpaper_information_link


var a_see_more = document.querySelector(".wallpaper_information a.see_more");

window.click_warning = function () {
  a_see_more.style.color = "tomato";
  a_see_more.classList.add("warning");
}; //warning_stop


window.stop_warning = function () {
  a_see_more.style.color = "#dfc200";
  a_see_more.classList = "see_more";
};
/******/ })()
;