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



function send(){
    alert("Thank you for your message.It has been sent.")
}


