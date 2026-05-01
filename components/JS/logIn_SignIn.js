function showSignIn() {
    document.getElementById("logIn").style.display = "none";
    document.getElementById("addRecipe").style.display = "none";
    document.getElementById("signIn").style.display = "flex";
}

function showLogIn() {
    document.getElementById("signIn").style.display = "none";
    document.getElementById("addRecipe").style.display = "none";
    document.getElementById("logIn").style.display = "flex";
}

function closebtn() {
    document.getElementById("signIn").style.display = "none";
    document.getElementById("logIn").style.display = "none";
    document.getElementById("addRecipe").style.display = "none";
}

function openSignIn() {
    document.getElementById("logIn").style.display = "none";
    document.getElementById("addRecipe").style.display = "none";
    document.getElementById("signIn").style.display = "flex";
}

function openLogIn() {
    document.getElementById("signIn").style.display = "none";
    document.getElementById("addRecipe").style.display = "none";
    document.getElementById("logIn").style.display = "flex";
}

function AddRecipe() {
    if (!isLoggedIn) {
        showSignIn();
        return;
    }
    document.getElementById("logIn").style.display = "none";
    document.getElementById("signIn").style.display = "none";
    document.getElementById("addRecipe").style.display = "block";
}

document.addEventListener('DOMContentLoaded', function() {
    let form = document.getElementById('addRecipeForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            let formData = new FormData(form);
            fetch('/CookBook-Recipe-Organizer-System/components/html/saveRecipe.php', {
                method: 'POST',
                body: formData
            })
            .then(res => res.text())
            .then(text => {
                if (text.trim() === 'success') {
                    closebtn();
                    alert('Recipe saved successfully!');
                    form.reset();
                    // Refresh recipes on current page without reloading
                    if (document.getElementById('homeRecipes')) {
                        loadHomeRecipes('indian');
                    } else if (document.querySelector('.recipes')) {
                        let cat = localStorage.getItem('cuisine') || 'indian';
                        let btn = document.getElementById(cat);
                        if (btn) btn.click();
                    }
                } else {
                    alert(text);
                }
            })
            .catch(err => {
                console.log(err);
                alert('Failed to save recipe. Please try again.');
            });
        });
    }
});

