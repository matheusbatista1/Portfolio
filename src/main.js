import './assets/css/style.css';

document.addEventListener("DOMContentLoaded", function () {
    const threelineIcon = document.getElementById("menu-toggle");
    threelineIcon.addEventListener("click", openMenu);

    function openMenu() {
        const menu = document.querySelector('.menu-principal');

        if (menu.classList.contains("menujs")){
            menu.classList.remove("menujs");
            threelineIcon.innerHTML = "&#9776;";
        } else {
            menu.classList.add("menujs");
            threelineIcon.innerHTML = "&Cross;";
        }
    }
});
