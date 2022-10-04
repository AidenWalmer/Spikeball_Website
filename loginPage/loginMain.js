/*
 * Author: Aiden Walmer
 * Date: 9/29/22
 * Description: Secure Login, using username and password
 */

window.addEventListener('load', init);    // when window is loaded, it will call init

function init() {
 
    let btnElement = document.querySelector('button');      // select the button by query
    btnElement.addEventListener('click', login);            // on button click, redirect to adminMembersPage
 
    /* Button Color Changes */
    btnElement.addEventListener('mousemove', () => {        // when hovering over the button, perform hover color change
       btnElement.classList.add('hover');
    });
}
 
function login() {
     alert("Logged In!")
}
 
 
 