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
}

function addMember() {
    console.log("Adding Member");
    let addForm = document.getElementById("addForm");
    addForm.classList.remove("hidden");
}

function deleteMember() {
    console.log("Deleting Member");
    let deleteForm = document.getElementById("deleteForm");
    deleteForm.classList.remove("hidden");
}

function editMember() {
    console.log("Editting Member");
    let editForm = document.getElementById("editForm");
    editForm.classList.remove("hidden");
}