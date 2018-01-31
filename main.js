document.querySelector('#openBtn').addEventListener('click',openNav);
document.querySelector('#closeBtn').addEventListener('click',closeNav);

function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}