//sub_animation(more_color)
const button_see_all = document.querySelector(".filter_container .see_all");
const get_section_sub = document.querySelector(".filter_container .sub");
const get_a_achievements = document.querySelector(".filter_container p.under_information a.achievements");
window.get_sub=()=> {
    setTimeout( ()=>{
        get_a_achievements.classList.add("animation_achievements");
    }, 500)
    button_see_all.classList.toggle("see_all_animation");
    get_section_sub.classList.toggle("section_sub_animation");
}
//wallpaper_information_link
const a_see_more = document.querySelector(".wallpaper_information a.see_more");
window.click_warning=()=> {
    a_see_more.style.color = "tomato";
    a_see_more.classList.add("warning");
}
//warning_stop
window.stop_warning=()=> {
    a_see_more.style.color = "#dfc200";
    a_see_more.classList = "see_more";
}
