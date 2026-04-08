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
