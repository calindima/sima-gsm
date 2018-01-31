/* Mobile slide menu */
document.querySelector('#openBtn').addEventListener('click',openNav);
document.querySelector('#closeBtn').addEventListener('click',closeNav);

function openNav() {
    document.getElementById("mySidenav").style.width = "100%";
}

function closeNav() {
    document.getElementById("mySidenav").style.width = "0";
}

/* Form validation */

function validateForm() {
    if (document.forms["myForm"]["nume"].value == "") {
        alert("Numele trebuie completat!");
        return false;
    }
    if (document.forms["myForm"]["prenume"].value == "") {
        alert("Prenumele trebuie completat!");
        return false;
    }
    if (document.forms["myForm"]["email"].value == "") {
        alert("E-mailul trebuie completat!");
        return false;
    }
    if (document.forms["myForm"]["telefon"].value == "") {
        alert("Nr. de telefon trebuie completat!");
        return false;
    }
}
function newDoc(){
    window.location.assign("www.w3schools.com");
}