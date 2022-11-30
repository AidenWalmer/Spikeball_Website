window.addEventListener('load', init);    // when window is loaded, it will call init

function init() { 

    let adminBtns = document.getElementById("adminBtns");
    adminBtns.classList.remove("hidden");

    let addBtn = document.getElementById("addBtn");
    addBtn.addEventListener("click", addMember);

    let deleteBtn = document.getElementById("deleteBtn");
    deleteBtn.addEventListener("click", deleteMember);

    let editBtn = document.getElementById("editBtn");
    editBtn.addEventListener("click", editMember);

    let logoutBtn = document.getElementById("logoutBtn");
    logoutBtn.addEventListener("click", logout);

    // Handled in HTML onclick="cancelForm()"
    // let cancelBtn = document.querySelector(".cancelBtn");
    // cancelBtn.addEventListener("click", cancelForm);
}

function addMember() {
    console.log("Adding Member");
    // Darken the page
    let header = document.querySelector("header");
    header.classList.add("darken");
    let searchBar = document.getElementById("searchBar");
    searchBar.classList.add("darken");
    let table = document.querySelector("table");
    table.classList.add("darken");
    let footer = document.querySelector("footer");
    footer.classList.add("darken");
    let adminBtns = document.getElementById("adminBtns");
    adminBtns.classList.add("darken");
    adminBtns.classList.add("disabled");
    // Darken the background color
    var style = document.createElement('style');
    style.innerHTML = ` 
    body {
        background-image: linear-gradient(to top, #000034, rgb(96, 119, 149)); 
    }
    `;
    document.head.appendChild(style);

    // Show Add Member form
    let addDiv = document.getElementById("addDiv");
    addDiv.classList.remove("hidden");
}

function deleteMember() {
    console.log("Deleting Member");
    // Darken the page
    let header = document.querySelector("header");
    header.classList.add("darken");
    let searchBar = document.getElementById("searchBar");
    searchBar.classList.add("darken");
    let table = document.querySelector("table");
    table.classList.add("darken");
    let footer = document.querySelector("footer");
    footer.classList.add("darken");
    let adminBtns = document.getElementById("adminBtns");
    adminBtns.classList.add("darken");
    adminBtns.classList.add("disabled");
    // Darken the background color
    var style = document.createElement('style');
    style.innerHTML = ` 
    body {
        background-image: linear-gradient(to top, #000034, rgb(96, 119, 149)); 
    }
    `;
    document.head.appendChild(style);

    // Show Delete Member form
    let deleteDiv = document.getElementById("deleteDiv");
    deleteDiv.classList.remove("hidden");
}

function editMember() {
    console.log("Editing Member");
    // Darken the page
    let header = document.querySelector("header");
    header.classList.add("darken");
    let searchBar = document.getElementById("searchBar");
    searchBar.classList.add("darken");
    let table = document.querySelector("table");
    table.classList.add("darken");
    let footer = document.querySelector("footer");
    footer.classList.add("darken");
    let adminBtns = document.getElementById("adminBtns");
    adminBtns.classList.add("darken");
    adminBtns.classList.add("disabled");
    // Darken the background color
    var style = document.createElement('style');
    style.innerHTML = ` 
    body {
        background-image: linear-gradient(to top, #000034, rgb(96, 119, 149)); 
    }
    `;
    document.head.appendChild(style);

    // Show Edit Member form
    let editDiv = document.getElementById("editDiv");
    editDiv.classList.remove("hidden");
}

function cancelForm() {
    console.log("Cancelling Current Form");
    // Undarken the page
    let header = document.querySelector("header");
    header.classList.remove("darken");
    let searchBar = document.getElementById("searchBar");
    searchBar.classList.remove("darken");
    let table = document.querySelector("table");
    table.classList.remove("darken");
    let footer = document.querySelector("footer");
    footer.classList.remove("darken");
    let adminBtns = document.getElementById("adminBtns");
    adminBtns.classList.remove("darken");
    adminBtns.classList.remove("disabled");
    // Undarken the background color
    var style = document.createElement('style');
    style.innerHTML = ` 
    body {
        background-image: linear-gradient(to top, #000080, #8bcbfd); 
    }
    `;
    document.head.appendChild(style);

    // Clear ALL input forms contents
    document.getElementById("addForm").reset();
    document.getElementById("editForm").reset();
    document.getElementById("deleteForm").reset();

    // Hide all Forms
    let addDiv = document.getElementById("addDiv");
    addDiv.classList.add("hidden");
    let deleteDiv = document.getElementById("deleteDiv");
    deleteDiv.classList.add("hidden");
    let editDiv = document.getElementById("editDiv");
    editDiv.classList.add("hidden");
}

function logout() {
    window.location.href = "http://localhost/cs310/Spikeball_Website/membersAdminPage/logout.php";
}