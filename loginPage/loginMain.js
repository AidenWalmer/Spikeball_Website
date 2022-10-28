/*
 * Author: Aiden Walmer
 * Date: 9/29/22
 * Description: Secure Login, using username and password
 */

window.addEventListener('load', init);    // when window is loaded, it will call init
var loggedIn = false;

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

        login(username, password);
    }
}
 
/* If login successful, transfer user to new page
 * If login unsuccessful, display the correct error message
 */
function login(username, password) {
    var storedUsername = 'spikeAdmin';
    var storedPassword = 'spookball4life';

    console.log(username);
    console.log(password);

    if (username == storedUsername && password == storedPassword) {
        alert('You logged in!');
        window.location.href = "membersPage/members.html";  // ADD LINK TO ADMIN VERSION OF MEMBERS PAGE!!!!!!!!!!!!!!!!!!
    }
    else if (username != storedUsername && password != storedPassword) {
        console.log('Incorrect username and password!');
        // Error Message reveal for both username and password
        passwordErrorDiv.classList.add("hidden");
        usernameErrorDiv.classList.add("hidden");
        bothErrorDiv.classList.remove("hidden");

        // Red styliziation around username/password field 
        var style = document.createElement('style');
        style.innerHTML = ` 
        #usernameLabel, #passwordLabel, #username::placeholder, #password::placeholder {
            color: red;
        }
        
        #username, #password {
            border-color: red;
        }
        `;
        document.head.appendChild(style);
    }
    else if (username != storedUsername && password == storedPassword) {
        console.log('Incorrect username!');
        // Error Message reveal for username
        passwordErrorDiv.classList.add("hidden");
        bothErrorDiv.classList.add("hidden");
        usernameErrorDiv.classList.remove("hidden");

        // Red styliziation around username 
        var style = document.createElement('style');
        style.innerHTML = ` 
        #usernameLabel, #username::placeholder {
            color: red;
        }
        #username {
            border-color: red;
        }

        #passwordLabel {
            color: black;
        }
        #password, #password::placeholder {
            border-color: black;
            color: black;
        }
        `;
        document.head.appendChild(style);
    }
    else {
        console.log('Incorrect password!');
        // Error Message reveal for password
        usernameErrorDiv.classList.add("hidden");
        bothErrorDiv.classList.add("hidden");
        passwordErrorDiv.classList.remove("hidden");

        // Red styliziation around password field 
        var style = document.createElement('style');
        style.innerHTML = ` 
        #passwordLabel, #password::placeholder {
            color: red;
        }
        
        #password {
            border-color: red;
        }

        #usernameLabel, #username::placeholder {
            color: black;
        }
        #username {
            border-color: black;
        `;
        document.head.appendChild(style);
    }
}
 
 
 
 