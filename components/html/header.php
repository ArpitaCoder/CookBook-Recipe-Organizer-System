<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
$isHomePage = basename($_SERVER['PHP_SELF']) === 'index.php';
?>
<header>
        <div class="img">
            <!-- <img src="img/R.jpg" alt="This is an image"> -->
            <h1>CookBook</h1>
        </div>
        <div class="taskbar">
            <a href="<?php echo $isHomePage ? '#home' : '/CookBook-Recipe-Organizer-System/index.php'; ?>">home</a>
            <a href="/CookBook-Recipe-Organizer-System/index.php#recipes">recipes</a>
            <a href="/CookBook-Recipe-Organizer-System/cuisines/cuisines.php">cuisines</a>
            <a href="/CookBook-Recipe-Organizer-System/index.php#contact">contact</a>
        </div>
        <div class="log">
            <?php if (isset($_SESSION['login']) && $_SESSION['login']): ?>
                <div class="user-badge">
                    <i class="fa-solid fa-circle-user"></i>
                    <span><?php echo $_SESSION['username']; ?></span>
                </div>
                <button class="logout-btn" onclick="window.location.href='/CookBook-Recipe-Organizer-System/components/html/logout.php'">Logout</button>
            <?php else: ?>
                <Button onclick="showLogIn()">LogIn</Button>
                <button onclick="showSignIn()" >SignIn</button>
            <?php endif; ?>
        </div>
    </header>
<script>
    var isLoggedIn = <?php echo isset($_SESSION['login']) && $_SESSION['login'] ? 'true' : 'false'; ?>;
</script>