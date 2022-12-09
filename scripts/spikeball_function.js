window.addEventListener('load', init);

const URL = "photoAPI.php";

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

    // Call function for fetching and displaying data for both random club photos 
    getJsonData1();
    getJsonData2();
}

/* Fetches and displays JSON data for a random club photo for left side */
function getJsonData1() {
    let url = URL + "?photoName=random";

    fetch(url)
      .then(checkStatus)
      .then(JSON.parse)
      .then(loadData1)
      .catch(console.error);   
}

/* Fetches and displays JSON data for a random club photo for right side */
function getJsonData2() {
  let url = URL + "?photoName=random";

  fetch(url)
    .then(checkStatus)
    .then(JSON.parse)
    .then(loadData2)
    .catch(console.error);   
}

 /**
   * Function to load the photoAPI JSON data into the page for left photo.
   * @param data - the data that is being returned from the API in JSON format
   */
function loadData1(data) {
    let imgLeft = document.getElementById("imgLeft");

    // Add the randomized image to the Left img 
    let imgL = document.createElement("img");
    imgL.src = data["img"];
    imgLeft.appendChild(imgL);
}

 /**
   * Function to load the photoAPI JSON data into the page for right photo.
   * @param data - the data that is being returned from the API in JSON format
   */
function loadData2(data) {
    let imgRight = document.getElementById("imgRight");

    // Add the randomized image to the Right img 
    let imgR = document.createElement("img");
    imgR.src = data["img"];
    imgRight.appendChild(imgR);
}

function linkPlayPage() {
    window.open("https://spikeball.com/pages/how-to-play-1", '_blank'); 
}

function linkRoundnetRules() {
    window.open("https://tournaments.spikeball.com/pages/2021-official-rules", '_blank'); 
}

function linkLoginPage() {
    window.location.href = "http://localhost/cs310/Spikeball_Website/membersPage/members.php";
    // window.location.href = "https://spikeball-club.uk.r.appspot.com/membersPage/members.php";
}

 /**
   * Helper function to return the response's result text if successful, otherwise
   * returns the rejected Promise result with an error status and corresponding text
   * @param {object} response - response to check for success/error
   * @returns {object} - valid result text if response was successful, otherwise rejected
   *                     Promise result
   */
  function checkStatus(response) {
    if (response.status >= 200 && response.status < 300 || response.status === 0) {
      return response.text();
    } else {
      return Promise.reject(new Error(response.status + ": " + response.statusText));
    }
  }