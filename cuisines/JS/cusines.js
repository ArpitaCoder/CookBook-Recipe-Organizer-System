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

if (window.cookbookCategories) {
    window.cookbookCategories.forEach(cat => {
        let btn = document.getElementById(cat.id);
        if (btn) {
            btn.addEventListener("click", () => loadRecipes(cat.id, cat.first, cat.rest));
        }
    });
}

window.onload = function(){
    let cuisine = localStorage.getItem("cuisine");
    if (window.cookbookCategories && cuisine) {
        let cat = window.cookbookCategories.find(c => c.id === cuisine);
        if (cat) {
            loadRecipes(cat.id, cat.first, cat.rest);
        }
    }

    let openRecipeId = localStorage.getItem("openRecipe");
    if (openRecipeId) {
        localStorage.removeItem("openRecipe");
        setTimeout(() => {
            let item = document.querySelector('.recipe-item[data-id="' + openRecipeId + '"]');
            if (item) {
                item.click();
            }
        }, 300);
    }
}
