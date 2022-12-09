window.addEventListener('load', init);

function init(){
    let eventBtn = document.getElementById("test");
    eventBtn.addEventListener('click', loadfunc)
}

function loadfunc(){
    window.location.href = "https://spikeball-club.uk.r.appspot.com/loginPage/login.php";
}