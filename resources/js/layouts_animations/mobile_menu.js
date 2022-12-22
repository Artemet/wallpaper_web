//mobile_menu
const get_mobile_img = document.querySelector(".header_line .mobile_wrapper img");
const get_sub_menu_mobile = document.querySelector(".header_line .mobile_wrapper .sub_menu");
const get_mobile_line = document.querySelector(".mobile_line");
window.get_mobile_menu = () =>{
    get_mobile_img.classList.toggle("animation");
    get_sub_menu_mobile.classList.toggle("sub_menu_animation");
    setTimeout( () => {
        get_mobile_line.classList.add("line_animation");
    }, 300);
}
