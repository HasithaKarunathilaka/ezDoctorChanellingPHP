<html>
    <head>
        <title>Loging | eZ Channeling</title>
        <link rel="stylesheet" type="text/css" href="CSS/login.css">
    </head>

    <body>
        <div class="loginBox">
            <h1>Member Login</h1>
            <form name="user_login_form" action="PHP/login.php" method="POST">
                <p>Username</p>
                <input type="text" name="un" placeholder="Enter Your E-mail">
                <p>Password</p>
                <input type="password" name="psw" placeholder="Enter Password">
                <input type="submit" name="login" value="Login">
            </form>
            <p style="font-weight: normal">Don't have account?
            <a href="signup.php">&nbsp; Sign Up</a>
            </p>
        </div>
    </body>
</html>