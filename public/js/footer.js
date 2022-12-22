/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!***************************************************!*\
  !*** ./resources/js/layouts_animations/footer.js ***!
  \***************************************************/
//count_text_message
var get_form = document.querySelector(".footer_container .input form");
var get_warning = document.querySelector(".footer_container .input span.count_number .siro");

get_form.problem.oninput = function () {
  get_warning.innerHTML = this.value.length;

  if (this.value.length >= 500) {
    get_warning.style.color = "tomato";
  } else {
    get_warning.style.color = "#dfc200";
  }
};
/******/ })()
;