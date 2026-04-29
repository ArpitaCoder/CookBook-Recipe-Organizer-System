let indian = document.getElementById("indian");
let chinese = document.getElementById("chinese");
let italian = document.getElementById("italian");
let rice = document.getElementById("rice");
let beverages = document.getElementById("beverages");
let desserts = document.getElementById("desserts");

function loadRecipes(category, firstLetter, restText) {
    document.getElementById("I").innerText = firstLetter;
    document.getElementById("content").innerText = restText;

    document.getElementById("normalPage").style.display = "block";
    document.getElementById("recDetails").style.display = "none";

    fetch("html/recipeCard.php?category=" + category)
        .then(res => res.text())
        .then(html => {
            document.querySelector(".recipes").innerHTML = html;
        })
        .catch(err => console.log(err));

    localStorage.setItem("cuisine", category);
}

indian.addEventListener("click", () => loadRecipes("indian", "I", "ndian"));
chinese.addEventListener("click", () => loadRecipes("chinese", "C", "hinese"));
italian.addEventListener("click", () => loadRecipes("italian", "I", "talian"));
rice.addEventListener("click", () => loadRecipes("rice", "R", "ice & Naan"));
beverages.addEventListener("click", () => loadRecipes("beverages", "B", "everages"));
desserts.addEventListener("click", () => loadRecipes("desserts", "D", "esserts"));

window.onload = function(){
    let cuisine = localStorage.getItem("cuisine");
    if(cuisine === "indian"){
        loadRecipes("indian", "I", "ndian");
    }
    else if(cuisine === "chinese"){
        loadRecipes("chinese", "C", "hinese");
    }
    else if(cuisine === "italian"){
        loadRecipes("italian", "I", "talian");
    }
    else if(cuisine === "rice"){
        loadRecipes("rice", "R", "ice & Naan");
    }
    else if(cuisine === "beverages"){
        loadRecipes("beverages", "B", "everages");
    }
    else if(cuisine === "desserts"){
        loadRecipes("desserts", "D", "esserts");
    }
}
