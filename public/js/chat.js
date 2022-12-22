/******/ (() => { // webpackBootstrap
var __webpack_exports__ = {};
/*!*************************************************!*\
  !*** ./resources/js/layouts_animations/chat.js ***!
  \*************************************************/
var get_chat = document.querySelector(".chat_container .chat");
var chat_icon = document.querySelector(".chat_icon");
var cross_icon = document.querySelector(".cross_icon"); //open_chat

window.open_chat = function () {
  get_chat.classList.add("chat_animation");
  chat_icon.style.display = "none";
  cross_icon.style.display = "initial";
}; //close_chat


window.close_chat = function () {
  get_chat.classList = "chat";
  chat_icon.style.display = "initial";
  cross_icon.style.display = "none";
};
/******/ })()
;