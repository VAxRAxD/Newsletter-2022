function drpFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}
window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {
        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}

function clickfunc() {
    document.querySelector('#header-nav').style.display = "flex";
    document.querySelector('#hamburger-menu').style.display = "none";
    document.querySelector('#cross-menu').style.display = "inline-block";
    document.querySelector('#bottom').style.display = "block";
};

function clickfunclight() {
    document.querySelector('#header-nav').style.display = "flex";
    document.querySelector('#hamburger-menu-light').style.display = "none";
    document.querySelector('#cross-menu-light').style.display = "inline-block";
    document.querySelector('#bottom').style.display = "block";
};

function crossfunc() {
    document.querySelector('#header-nav').style.display = "none";
    document.querySelector('#hamburger-menu').style.display = "inline-block";
    document.querySelector('#cross-menu').style.display = "none";
    document.querySelector('#bottom').style.display = "none";
};

function crossfunclight() {
    document.querySelector('#header-nav').style.display = "none";
    document.querySelector('#hamburger-menu-light').style.display = "inline-block";
    document.querySelector('#cross-menu-light').style.display = "none";
    document.querySelector('#bottom').style.display = "none";
};