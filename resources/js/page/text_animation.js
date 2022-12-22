const get_div_animation = document.querySelectorAll(".text_animation div");
window.addEventListener('scroll', function () {
    const display_height = window.innerHeight;
    get_div_animation.forEach((item) => {
        if (pageYOffset > item.offsetTop - display_height){
            item.classList.add("animation");
        }
    });
});
