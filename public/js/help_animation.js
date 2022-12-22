/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************************!*\
  !*** ./resources/js/page/help_animation.js ***!
  \*********************************************/
var get_form = document.querySelector("form");
var get_warning = document.querySelector(".help_message .button .siro");

get_form.problem.oninput = function () {
  get_warning.innerHTML = this.value.length;

  if (this.value.length >= 500) {
    get_warning.style.color = "tomato";
  } else {
    get_warning.style.color = "#0b74d5";
  }
};
/******/ })()
;