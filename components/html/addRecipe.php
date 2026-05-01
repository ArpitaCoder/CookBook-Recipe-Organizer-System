<div class="addRecipeBtn">
    <i onclick="AddRecipe()" class="fa-solid fa-plus"></i>
</div>

<div class="addRecipe" id="addRecipe">
    <div class="addRecipe_disc">
        <i onclick="closebtn()" class="fa-solid fa-xmark"></i>
        
        <?php include_once 'categories.php'; ?>
        <form id="addRecipeForm" action="/CookBook-Recipe-Organizer-System/components/html/saveRecipe.php" method="POST" enctype="multipart/form-data">

            <input type="file" id="fileUpload" name="recipeImage" hidden>
            <label for="fileUpload" class="upload-btn">Upload Image</label>

            <input type="text" name="dishName" placeholder="Dish Name" required>
            <input type="text" name="authorName" placeholder="Author Name" required value="<?php echo isset($_SESSION['username']) ? $_SESSION['username'] : ''; ?>">
            <textarea name="description" placeholder="Short Description" required></textarea>
            <textarea name="ingredients" placeholder="Ingredients" required></textarea>
            <textarea name="method" placeholder="Cooking Method" required></textarea>
            <select name="category" required>
                <?php foreach($categories as $key => $label): ?>
                <option value="<?php echo $key; ?>"><?php echo $label; ?></option>
                <?php endforeach; ?>
            </select>

            <button type="submit">Save Recipe</button>
        </form>
    </div>
</div>