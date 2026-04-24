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
            <?php if(isset($_SESSION['login']) && $_SESSION['login'] == true): ?>
            <p><?php echo $_SESSION['username']; ?></p>
            <a href="logout.php"><button>Logout</button></a>

        <?php else: ?>

            <button onclick="showLogIn()">LogIn</button>
            <button onclick="showSignIn()">SignUp</button>

        <?php endif; ?>
        </div>
    </header>