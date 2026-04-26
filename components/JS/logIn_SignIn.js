function showSignIn() {
    document.getElementById("logIn").style.display = "none";
    document.getElementById("addRecipe").style.display = "none";
    document.getElementById("signIn").style.display = "flex";
}

function showLogIn() {
    document.getElementById("signIn").style.display = "none";
    document.getElementById("addRecipe").style.display = "none";
    document.getElementById("logIn").style.display = "flex";
}

function closebtn() {
    document.getElementById("signIn").style.display = "none";
    document.getElementById("logIn").style.display = "none";
    document.getElementById("addRecipe").style.display = "none";
}

function openSignIn() {
    document.getElementById("logIn").style.display = "none";
    document.getElementById("addRecipe").style.display = "none";
    document.getElementById("signIn").style.display = "flex";
}

function openLogIn() {
    document.getElementById("signIn").style.display = "none";
    document.getElementById("addRecipe").style.display = "none";
    document.getElementById("logIn").style.display = "flex";
}

function AddRecipe() {
    document.getElementById("logIn").style.display = "none";
    document.getElementById("signIn").style.display = "none";
    document.getElementById("addRecipe").style.display = "block";
}

