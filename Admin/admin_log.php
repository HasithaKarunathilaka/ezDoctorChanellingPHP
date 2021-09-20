<html>
    <head>
        <title>Admin Loging | eZ Channeling</title>
        <link rel="stylesheet" type="text/css" href="../CSS/login.css">
    </head>

    <body>
        <div class="loginBox">
            <h1>Admin Login</h1>
            <form name="admin_login_form" action="../PHP/admin_login.php" method="POST">
                <p>Username</p>
                <input type="text" name="un" placeholder="Administrator Username">
                <p>Password</p>
                <input type="password" name="psw" placeholder="Administrator Password">
                <input type="submit" name="login" value="Login">
            </form>
        </div>
    </body>
</html>