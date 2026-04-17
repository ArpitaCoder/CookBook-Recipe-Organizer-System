<div  class="addRecipeBtn">
        <i onclick="AddRecipe()" class="fa-solid fa-plus"></i></div>
    <div class="addRecipe" id="addRecipe">
        <div class="addRecipe_disc" >
            <i onclick="closebtn()" class="fa-solid fa-xmark"></i>
            <!-- <h2>Add New Recipe</h2> -->
            <form action="addRecipe.php" method="POST" enctype="multipart/form-data">
             <input type="file" id="fileUpload" hidden>
<label for="fileUpload" class="upload-btn">Upload Image</label>
            <input type="text" name="dishName" placeholder="Dish Name" required>
            <textarea name="description" placeholder="Short Description" required></textarea>
            <textarea name="ingredients" placeholder="Ingredients (comma separated)" required></textarea>
            <textarea name="method" placeholder="Cooking Method" required></textarea>
            
            <button type="submit">Add Recipe</button>
        </form>

        </div>
    </div>