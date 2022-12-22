const get_textarea_help = document.querySelector(".help_message .inputs textarea");
window.border_change=()=>{
    get_textarea_help.classList.add("border_style");
}
window.border_normal=()=> {
    get_textarea_help.classList = "";
}
