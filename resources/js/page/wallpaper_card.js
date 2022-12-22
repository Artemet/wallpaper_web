//card_animation_onmouseover
const card_name = document.querySelectorAll(".wallpaper_container .card_list .card .card_description p.name");
window.addEventListener('scroll', function () {
    const display_height = window.innerHeight;
    card_name.forEach((item) => {
        if (pageYOffset > item.offsetTop - display_height){
            item.classList.add("name_animation");
        }
    });
});
