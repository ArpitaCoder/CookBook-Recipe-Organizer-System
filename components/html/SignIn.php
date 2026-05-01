<div class="signIn" id="signIn" style="display:none;">
    <i onclick="closebtn()" class="fa-solid fa-xmark"></i>
    <div class="signIn_disc">
        <h4>Sign In</h4>
        <p class="p1">Enter your credentials to access your account</p>
        <form action="/CookBook-Recipe-Organizer-System/components/html/login_process.php" method="POST">
            <p>Email Address</p>
            <input type='email' placeholder='***@example.com' name="email" required />
            <p>Password</p>
            <input type='password' placeholder='Enter Password' name="password" required />
            <button type="submit">Sign In</button> 
            <p class="create">Don't have an account? <span onclick="openLogIn()">Create one</span></p>
        </form>
    </div>
</div>