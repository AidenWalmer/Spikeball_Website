window.addEventListener('load', init);    // when window is loaded, it will call init

function init() {

    let loginBtn = document.getElementById("loginBtn")
    loginBtn.addEventListener("click", toAdminLogin);

    // if (loggedIn(true)) {
    //     console.log("Logged In")
    //     let adminBtns = document.getElementById("adminBtns");
    //     adminBtns.classList.remove("hidden");
    // }
    // else {
    //     console.log("Not Logged In");
    // }
}

function toAdminLogin() {
    window.location.href = "http://localhost/cs310/Spikeball_Website/loginPage/login.html";
}