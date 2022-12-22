/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*********************************************!*\
  !*** ./resources/js/page/wallpaper_card.js ***!
  \*********************************************/
//card_animation_onmouseover
var card_name = document.querySelectorAll(".wallpaper_container .card_list .card .card_description p.name");
window.addEventListener('scroll', function () {
  var display_height = window.innerHeight;
  card_name.forEach(function (item) {
    if (pageYOffset > item.offsetTop - display_height) {
      item.classList.add("name_animation");
    }
  });
});
/******/ })()
;