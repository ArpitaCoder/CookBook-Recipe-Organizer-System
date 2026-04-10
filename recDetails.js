let normalPage = document.getElementById("normalPage");
let recDetails = document.getElementById("recDetails");

let recipes = document.querySelectorAll(".recipe-item");
let heading = document.getElementById("heading");
let recipeData = {};

fetch("recipes.json")   
    .then(res => res.json())
    .then(data => {
        recipeData = data;
    })
    .catch(err => console.log(err));

recipes.forEach((item) => {
    item.addEventListener("click", () => {

        let recipeName = item.getAttribute("data-name");
        let data = recipeData[recipeName];

        normalPage.style.display = "none";
        recDetails.style.display = "block";

        document.getElementById("content").innerText = data.title.charAt(0);
        document.getElementById("content").innerText = data.title.slice(1);
        document.getElementById("desc").innerText = data.desc;
        document.getElementById("author").innerText = data.author;
        document.getElementById("date").innerText = data.date;
        document.getElementById("detailImg").src = data.img;

        
        let ingList = document.getElementById("ingredientsList");
        ingList.innerHTML = "";
        data.ingredients.forEach((ing) => {
            ingList.innerHTML += `<li>${ing}</li>`;
        });

        let methodList = document.getElementById("methodList");
        methodList.innerHTML = "";
        data.method.forEach((step) => {
            methodList.innerHTML += `<li>${step}</li>`;
        });

    });
});