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

    // Call function for fetching and displaying data for random club photo
    getJsonData();
}

/* Fetches and displays JSON data for a random club photo */
function getJsonData() {
    let url = URL + "?photoName=random";

    fetch(url)
      .then(checkStatus)
      .then(JSON.parse)
      .then(loadData)
      .catch(console.error);   
}

 /**
   * Function to load the photoAPI JSON data into the page.
   * @param data - the data that is being returned from the API in JSON format
   */
function loadData(data) {
    let imgLeft = document.getElementById("imgLeft");

    // Add the image
    let img = document.createElement("img");
    img.src = data["img"];
    imgLeft.appendChild(img);
}

function linkPlayPage() {
    window.location.href = "https://spikeball.com/pages/how-to-play-1";
}

function linkRoundnetRules() {
    window.location.href = "https://tournaments.spikeball.com/pages/2021-official-rules";
}

// DOES NOT WORK!!! I dont think this will work because i think its using the href as a url rather than a file path? maybe
function linkLoginPage() {
    window.location.href = "C:\Users\Aiden\OneDrive - Elizabethtown College\Web Development\Spikeball_Website\loginPage\login.html";
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