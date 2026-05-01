<?php include_once 'categories.php'; ?>
<div class="contact">
        <a name="contact"></a>
        <footer class="site-footer">
            <div class="footer-container">
                <div class="footer-brand">
                    <h4>CookBook</h4>
                    <p>Discover, Cook & Share</p>
                    <div class="social-icons">
                        <a href="#"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#"><i class="fa-brands fa-x-twitter"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
                <div class="footer-contact">
                    <h5>Contact</h5>
                    <p><i class="fa-solid fa-envelope"></i> hello@cookbook.com</p>
                    <p><i class="fa-solid fa-phone"></i> +91-98765-43210</p>
                    <p><i class="fa-solid fa-location-dot"></i> Jalandhar, Punjab</p>
                    <p><i class="fa-solid fa-clock"></i> Mon - Sun: 9AM - 10PM</p>
                </div>
                <div class="footer-links">
                    <h5>Quick Links</h5>
                    <a href="/CookBook-Recipe-Organizer-System/index.php">Home</a>
                    <a href="/CookBook-Recipe-Organizer-System/cuisines/cuisines.php">Cuisines</a>
                    <a href="/CookBook-Recipe-Organizer-System/index.php#recipes">Recipes</a>
                    <a href="#" onclick="AddRecipe(); return false;">Add Recipe</a>
                </div>
                <div class="footer-categories">
                    <h5>Categories</h5>
                    <?php foreach($categories as $key => $label): ?>
                    <a href="/CookBook-Recipe-Organizer-System/cuisines/cuisines.php"><?php echo $label; ?></a>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="footer-bottom">
                <p> CookBook. All rights reserved.</p>
            </div>
        </footer>