/*
 * Author: Aiden Walmer
 * Date: 9/29/22
 * Description: Secure Login, using username and password
 */

window.addEventListener('load', init);    // when window is loaded, it will call init
var loggedIn = false;

function init() {
    console.log("Admin session: " + loggedIn);
    let btnElement = document.querySelector('button');      // select the button by query
    btnElement.addEventListener('click', authenticate);     // on button click, redirect to adminMembersPage
 
    /* Button Color Changes */
    btnElement.addEventListener('mousemove', () => {        // when hovering over the button, perform hover color change
       btnElement.classList.add('hover');
    });
}

/* Store values of username and password then prompt the login function  */
function authenticate() {
    let password = document.getElementById('password').value;
    let username = document.getElementById('username').value;

    loggedIn = login(username, password);
    loginStatus();
}
 
/* If login successful, transfer user to new page
 * If login unsuccessful, display the correct error message
 */
function login(username, password) {
    // var storedUsername = 'spikeballclub'; 
    // var storedPassword = 'spookball4life'; 
    var storedUsername = 'spikeballclub'; 
    var storedPassword = 'smashorpass'; 

    console.log(username);
    console.log(password);

    if (username == storedUsername) {
        return password == storedPassword;
    }
}

function loginStatus() {
    if (loggedIn) {
        // alert('You logged in!');
        console.log("Admin Session: " + loggedIn);
        // window.location.href = "http://localhost/cs310/Spikeball_Website/membersPage/members.html";
        window.location.href = "http://localhost/cs310/Spikeball_Website/membersAdminPage/membersAdmin.html";
    }
    else {
        console.log('Incorrect username and password!');
        // Error Message reveal 
        let errorDiv = document.getElementById("errorDiv");
        errorDiv.classList.remove("hidden");

        // Red styliziation around username/password field 
        var style = document.createElement('style');
        style.innerHTML = ` 
        #username::placeholder, #password::placeholder {
            color: red;
        }
        
        #username, #password {
            border-color: red;
        }
        `;
        document.head.appendChild(style);
    }
}
 
 
 
 