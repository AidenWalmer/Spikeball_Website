window.addEventListener('load', init);    // when window is loaded, it will call init

function init() {
    let adminBtns = document.getElementById("adminBtns");
    adminBtns.classList.remove("hidden");
}