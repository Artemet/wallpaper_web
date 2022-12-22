const class_name = "animation";
const get_line = document.querySelectorAll(".line");
//web_information_scroll
setTimeout(() =>{
    const web_information_p = document.querySelector(".web_information p");
        web_information_p.classList.add(class_name);
}, 200);
setTimeout(()=>{
    const get_img_nft = document.querySelector(".nft_monkey img");
        get_img_nft.classList.add(class_name);
}, 400);
window.addEventListener('scroll', function () {
    const display_height = window.innerHeight;
    //home_scroll
    const get_top_text = document.querySelector(".header_line .header_line_part .wrapper div p.top");
    if (pageYOffset === 0){
        get_top_text.style.color = "white";
    }
    else {
        get_top_text.style.color = "#dfc200";
    }
    const get_top_line = document.querySelector(".header_line");
    const get_color_change = document.querySelector(".header_line h1");
    if (pageYOffset === 0){
        get_top_line.classList = "header_line";
        get_color_change.classList = "";
    }
    else {
        get_top_line.classList.add("header_line_background");
        get_color_change.classList.add("color_change");
    }
    //line_animation
    get_line.forEach((item) => {
        if (pageYOffset > item.offsetTop - display_height){
            item.classList.add("line_animation");
        }
    });
    //wallpaper_information_img
    const wallpaper_information_img = document.querySelectorAll(".wallpaper_information .img img");
    wallpaper_information_img.forEach((item) => {
        if (pageYOffset > item.offsetTop - display_height){
            item.classList.add(class_name);
        }
    });
    //filter_container_p
    const get_filter_p = document.querySelectorAll(".filter_container .section p");
    get_filter_p.forEach((item) => {
        if (pageYOffset > item.offsetTop - display_height){
            item.classList.add(class_name);
        }
    });
    //text_part_animation
    const img_one = document.querySelectorAll(".quality_information img.one");
    img_one.forEach((item) => {
        if (pageYOffset > item.offsetTop - display_height){
            item.classList.add("one_animation");
        }
    });
    const img_two = document.querySelectorAll(".quality_information img.two");
    img_two.forEach((item) => {
        if (pageYOffset > item.offsetTop - display_height){
            item.classList.add("two_animation");
        }
    });
    const h2 = document.querySelectorAll(".quality_information .text_part h2");
    h2.forEach((item) => {
        if (pageYOffset > item.offsetTop - display_height){
            item.classList.add(class_name);
        }
    });
});
