window.addEventListener('load', init);    // when window is loaded, it will call init

function init() {

    let loginBtn = document.getElementById("loginBtn")
    loginBtn.addEventListener("click", toAdminLogin);
}

function toAdminLogin() {
    window.location.href = "https://spikeball-club.uk.r.appspot.com/loginPage/login.php";
}