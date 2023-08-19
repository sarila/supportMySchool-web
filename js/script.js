
const menu = document.getElementById("show_menu_icon");
const closeMenu = document.getElementById("close_menu_icon");
const dropDown = document.getElementById("dropdown");

menu.addEventListener("click", ()=>{
    dropDown.classList.toggle("show");
})

closeMenu.addEventListener("click", ()=>{
    dropDown.classList.remove("show")
})   