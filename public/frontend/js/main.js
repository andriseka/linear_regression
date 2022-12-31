// Nav Toggle
function navToggle()
{
    var navMenu = document.getElementById("navMenu");
    navMenu.classList.add("show-menu");
}
function navClose()
{
    var navMenu = document.getElementById("navMenu");
    navMenu.classList.remove("show-menu");
}

// Modal
var modal = document.getElementById("modal-show");
function predictModal()
{
    modal.classList.add("active-modal");
}
function modalHide()
{
    modal.classList.remove("active-modal");
}

