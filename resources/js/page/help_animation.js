const get_form  = document.querySelector("form");
const get_warning = document.querySelector(".help_message .button .siro");
get_form.problem.oninput = function (){
    get_warning.innerHTML = this.value.length;
    if (this.value.length >= 500){
        get_warning.style.color = "tomato";
    }
    else {
        get_warning.style.color = "#0b74d5";
    }
};
