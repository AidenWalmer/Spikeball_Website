window.addEventListener('load', init);

function init() {
    // How to Play Tab
    let playTabElm = document.getElementById("playTab");            // grab the playTab element
    playTabElm.addEventListener('click', linkPlayPage);             // on click, take to specified page

    // Official Rules Tab
    let rulesTabElm = document.getElementById("rulesTab");          // grab the rulesTab element
    rulesTabElm.addEventListener('click', linkRoundnetRules);       // on click, take to specified page

    // Members Tab
    let membersTabElm = document.getElementById("membersTab");      // grab the membersTab element
    membersTabElm.addEventListener('click', linkLoginPage);         // on click, take to specified page
}

// DOES NOT WORK!!! Links to empty page?
function linkPlayPage() {
    window.location.href = "https://spikeball.com/pages/how-to-play-1";
}

function linkRoundnetRules() {
    window.location.href = "https://tournaments.spikeball.com/pages/2021-official-rules";
}

// DOES NOT WORK!!! Links to empty page?//I dont think this will work because i think its using the href as a url rather than a file path? maybe
function linkLoginPage() {
    window.location.href = "C:\Users\Aiden\OneDrive - Elizabethtown College\Web Development\Spikeball_Website\loginPage\login.html";
}
