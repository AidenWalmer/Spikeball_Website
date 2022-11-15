window.addEventListener('load', init);    // when window is loaded, it will call init

function init() {
    let adminBtns = document.getElementById("adminBtns");
    adminBtns.classList.remove("hidden");

    // if (loggedIn) {
    //     console.log("Admin Session: " + loggedIn);
    //     let adminBtns = document.getElementById("adminBtns");
    //     adminBtns.classList.remove("hidden");
    // }
    // else {
    //     console.log("Admin Session: " + loggedIn);
    // }
}