/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!**************************************!*\
  !*** ./resources/js/page/account.js ***!
  \**************************************/
var sing_in_part = document.querySelector(".my_account_container .sing_in_part");
var register_part = document.querySelector(".my_account_container .register_part"); //register open

window.register_text = function () {
  sing_in_part.classList = "sing_in_part_close";
  register_part.classList = "register_part_open";
}; //sing in open


window.sing_in_text = function () {
  sing_in_part.classList = "sing_in_part";
  register_part.classList = "register_part";
}; //scroll


window.addEventListener('scroll', function () {
  var display_height = window.innerHeight;
  var get_label = document.querySelectorAll(".my_account_container form label");
  get_label.forEach(function (item) {
    if (pageYOffset > item.offsetTop - display_height) {
      item.classList = "animation";
    }
  });
});
/******/ })()
;