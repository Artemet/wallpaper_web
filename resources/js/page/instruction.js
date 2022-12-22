//number_animation
const get_span = document.querySelectorAll(".instruction_container .wallpaper_information .span");
window.addEventListener('scroll', function () {
    const display_height = window.innerHeight;
    get_span.forEach((item) => {
        if (pageYOffset > item.offsetTop - display_height){
            item.classList.add("span_animation");
        }
    });
});
