let indian = document.getElementById("indian");
let chinese = document.getElementById("chinese");
let italian = document.getElementById("italian");
let rice = document.getElementById("rice");
let beverages = document.getElementById("beverages");
let desserts = document.getElementById("desserts");

indian.addEventListener("click", () => {
    localStorage.setItem("cuisine", "indian");
    window.location.href = "cuisines.html";
});

chinese.addEventListener("click", () => {
    localStorage.setItem("cuisine", "chinese");
    window.location.href = "cuisines.html";
});

italian.addEventListener("click", () => {
    localStorage.setItem("cuisine", "italian");
    window.location.href = "cuisines.html";
});

rice.addEventListener("click", () => {
    localStorage.setItem("cuisine", "rice");
    window.location.href = "cuisines.html";
});

beverages.addEventListener("click", () => {
    localStorage.setItem("cuisine", "beverages");
    window.location.href = "cuisines.html";
});

desserts.addEventListener("click", () => {
    localStorage.setItem("cuisine", "desserts");
    window.location.href = "cuisines.html";
});


function showSignIn(){
    document.getElementById("signIn").style.display = "flex";
}
function showLogIn(){
    document.getElementById("logIn").style.display = "flex";
}
function closebtn(){
    document.getElementById("signIn").style.display = "none";
    document.getElementById("logIn").style.display = "none";
}
function send(){
    alert("Thank you for your message.It has been sent.")
}
function openSignIn(){
    document.getElementById("logIn").style.display = "none";
    document.getElementById("signIn").style.display = "flex";
}
function openLogIn(){
    document.getElementById("logIn").style.display = "flex";
    document.getElementById("signIn").style.display = "none";
}

