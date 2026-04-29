let normalPage = document.getElementById("normalPage");
let recDetails = document.getElementById("recDetails");
let recipesContainer = document.querySelector(".recipes");

recipesContainer.addEventListener("click", (e) => {
    let item = e.target.closest(".recipe-item");
    if (!item) return;

    let recipeId = item.getAttribute("data-id");

    fetch("html/recipeDetail.php?id=" + recipeId)
        .then(res => res.json())
        .then(data => {
            if (data.error) {
                console.log(data.error);
                return;
            }

            normalPage.style.display = "none";
            recDetails.style.display = "block";

            document.getElementById("detailI").innerText = data.title.charAt(0);
            document.getElementById("detailContent").innerText = data.title.slice(1);
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
        })
        .catch(err => console.log(err));
});