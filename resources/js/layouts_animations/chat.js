const get_chat = document.querySelector(".chat_container .chat");
const chat_icon = document.querySelector(".chat_icon");
const cross_icon = document.querySelector(".cross_icon");
//open_chat
window.open_chat = () =>{
    get_chat.classList.add("chat_animation");
    chat_icon.style.display = "none";
    cross_icon.style.display = "initial";
}
//close_chat
window.close_chat = () =>{
    get_chat.classList = "chat";
    chat_icon.style.display = "initial";
    cross_icon.style.display = "none";
}
