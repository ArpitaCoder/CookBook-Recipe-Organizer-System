<?php
session_start();
?>
<header>
        <div class="img">
            <!-- <img src="img/R.jpg" alt="This is an image"> -->
            <h1>CookBook</h1>
        </div>
        <div class="taskbar">
            <a href="#home">home</a>
            <a href="#recipes">recipes</a>
            <a href="cuisines/cuisines.php">cuisines
            </a>
            <a href="#contact">contact</a>
        </div>
        <div class="log">
            <?php if (isset($_SESSION['login']) && $_SESSION['login']): ?>
                <span style="color:white; margin-right:10px;"><?php echo $_SESSION['username']; ?></span>
                <button onclick="window.location.href='/CookBook-Recipe-Organizer-System/components/html/logout.php'">Logout</button>
            <?php else: ?>
                <Button onclick="showLogIn()">LogIn</Button>
                <button onclick="showSignIn()" >SignIn</button>
            <?php endif; ?>
        </div>
    </header>
<script>
    var isLoggedIn = <?php echo isset($_SESSION['login']) && $_SESSION['login'] ? 'true' : 'false'; ?>;
</script>