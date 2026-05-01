<div class="logIn" id="logIn" style="display:none;">
    <i onclick="closebtn()" class="fa-solid fa-xmark"></i>
    <div class="logIn_disc">
        <h4>Create Your Account</h4>
        <p class="p1">Enter your credentials to access your account</p>
        <form action="/CookBook-Recipe-Organizer-System/components/html/register.php" method="POST">
            <p>Full Name</p>
            <input type="text" placeholder="Enter Your name" name="name" required>
            <p>Email Address</p>
            <input type='email' placeholder='***@example.com' name='email' required />
            <p>Password</p>
            <input type='password' placeholder='Enter Password' name='password' required />
            <button type="submit">Sign Up</button> 
            <p class="create">Already Have an Account? <span onclick="openSignIn()">Sign In</span></p>
        </form>
    </div>
</div>
