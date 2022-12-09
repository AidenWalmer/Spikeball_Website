window.addEventListener('load', init);

function init(){
    let eventBtn = document.getElementById("test");
    eventBtn.addEventListener('click', loadfunc)
}

function loadfunc(){
    window.location.href = "http://localhost/cs310/Spikeball_Website/loginPage/login.php";
}