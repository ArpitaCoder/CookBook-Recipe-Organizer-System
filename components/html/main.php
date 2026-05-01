<main>
        <a name="home"></a> 
        <img src="components/img/thali3.png" height="100%" width="100%">
        <div class="Disc">      
        <h1>CookBook</h1>
        <p class="p1">Discover delicious recipes made for every taste. <br>
        Search, cook, and enjoy every bite.</p> 
        <i class="fa fa-search" id="searchIcon" style="cursor:pointer;"></i>

        <input type="text" id="searchInput" placeholder="Find your next favorite recipe…">

        </div>

        <script>
            function performSearch() {
                let query = document.getElementById('searchInput').value.trim();
                if (!query) return;

                fetch("cuisines/html/recipeCard.php?search=" + encodeURIComponent(query) + "&limit=6")
                    .then(res => res.text())
                    .then(html => {
                        if (html.includes('No recipes found') || html.trim() === '') {
                            alert('Recipe not available');
                        } else {
                            let container = document.getElementById('homeRecipes');
                            if (container) {
                                container.innerHTML = html;
                                document.getElementById('recipes').scrollIntoView({ behavior: 'smooth' });
                            }
                        }
                    })
                    .catch(err => console.log(err));
            }

            document.getElementById('searchInput').addEventListener('keypress', function(e) {
                if (e.key === 'Enter') performSearch();
            });
            document.getElementById('searchIcon').addEventListener('click', performSearch);
        </script>
</main>