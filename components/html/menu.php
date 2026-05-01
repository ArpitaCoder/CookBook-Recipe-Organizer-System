<?php include_once 'categories.php'; ?>
<div class="menu">
        <a name="recipes"></a>
        <div class="R_title">
            <span class="line"></span>
            <span class="h2">Recipes</span>
            <span class="line"></span>
        </div>
        <div class="menu_bar">
            <?php foreach($categories as $key => $label): ?>
            <button id="<?php echo $key; ?>" type="button"><?php echo $label; ?></button>
            <?php endforeach; ?>
        </div>
    </div>
    <div class="recipes" id="homeRecipes"></div>

    <script>
        let homeRecipesContainer = document.getElementById("homeRecipes");
        let menuButtons = document.querySelectorAll(".menu_bar button");

        function loadHomeRecipes(category) {
            fetch("cuisines/html/recipeCard.php?category=" + category + "&limit=6")
                .then(res => res.text())
                .then(html => {
                    homeRecipesContainer.innerHTML = html;
                })
                .catch(err => console.log(err));
        }

        homeRecipesContainer.addEventListener("click", (e) => {
            let item = e.target.closest(".recipe-item");
            if (!item) return;
            let recipeId = item.getAttribute("data-id");
            localStorage.setItem("openRecipe", recipeId);
            window.location.href = "cuisines/cuisines.php";
        });

        let menuBar = document.querySelector(".menu_bar");

        menuButtons.forEach(btn => {
            let category = btn.id;

            btn.addEventListener("mouseenter", () => {
                loadHomeRecipes(category);
            });

            btn.addEventListener("click", () => {
                localStorage.setItem("cuisine", category);
                window.location.href = "cuisines/cuisines.php";
            });
        });

        window.addEventListener("load", () => {
            loadHomeRecipes("indian");
        });
    </script>