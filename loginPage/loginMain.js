/*
 * Author: Aiden Walmer
 * Date: 9/29/22
 * Description: Secure Login, using username and password
 */

window.addEventListener('load', init);    // when window is loaded, it will call init

function init() {
 
    let btnElement = document.querySelector('button');      // select the button by query
    btnElement.addEventListener('click', authenticate);     // on button click, redirect to adminMembersPage
 
    /* Button Color Changes */
    btnElement.addEventListener('mousemove', () => {        // when hovering over the button, perform hover color change
       btnElement.classList.add('hover');
    });

    /* Store values of username and password then prompt the login function  */
    function authenticate() {
        let password = document.getElementById('password').value;
        let username = document.getElementById('username').value;

        loggedIn = login(username, password);
        loginStatus();
    }
}
 
/* Return login if the storedpassword matches the user password
 * Arguments: username and password 
*/
function login(username, password) {
    var storedPassword = 'spookball4life'
    if (username != "") {
        return password == storedPassword;
    }
}

/* If login successful, transfer user to new page
 * If login unsuccessful, display error message and reset password field for resubmission
 */
function loginStatus() {
    if (loggedIn) {
        alert('You logged in!')
        // window.location.href = "";           ADD LINK TO ADMIN VERSION OF MEMBERS PAGE
    }
    else {
        console.log('You are not logged in!')

        // Error Message reveal
        errorDiv.classList.remove("hidden");

        // Reset text in password input field 
        let password = document.getElementById('password').value;
        password.innerText = "";

        // Red styliziation around username/password field 
        var style = document.createElement('style');
        style.innerHTML = ` 
        #passwordLabel, ::placeholder {
            color: red;
        }

        #password {
            border-color: red;
        }
        `;
        document.head.appendChild(style);
    }
}
 
 
 
 