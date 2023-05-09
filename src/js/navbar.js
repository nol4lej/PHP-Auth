const nav_menu = document.getElementById("menu");

function menuResponsive(){
    if(nav_menu.style.display === "flex"){
        nav_menu.style.display = "none";
    } else {
        nav_menu.style.display = "flex";
    }
}