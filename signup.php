<html>
    <head>
        <title>Sign Up | eZ Channeling</title>
        <link rel="stylesheet" type="text/css" href="CSS/signup.css">

        <script language="javascript">
            
            function datavalid(){
                if(document.user_signup_form.fname.value=='') {
                    alert("Please enter your First Name");
                    return false;
                }
                if(document.user_signup_form.lname.value=='') {
                    alert("Please enter your Last Name");
                    return false;
                 }
                if(document.user_signup_form.nic.value=='') {
                    alert("Please enter your NIC Number");
                    return false;
                }
                if(document.user_signup_form.mob.value=='') {
                    alert("Please enter your Mobile Number");
                    return false;
                }
                if(document.user_signup_form.email.value=='') {
                    alert("Please enter your Email Address");
                    return false;
                }
                if(document.user_signup_form.pw.value=='') {
                    alert("Please enter your Passward");
                    return false;
                }
                if (document.user_signup_form.pw.value.length<8){
		            alert("Password should be at least 8 characters");
		            return false;
	            }
                if(document.user_signup_form.cpw.value=='') {
                    alert("Please enter Confirm Password");
                    return false;
                }
                if(document.user_signup_form.pw.value!=document.user_signup_form.cpw.value) {
                    alert("Password and Confirmation does not match");
                    return false;
                }
                else{
                    return confirm;
                }
            }
            
        </script>	
    </head>
    <body>
        <div class="signBox">
            <form action="PHP/signup.php" name="user_signup_form"   onsubmit="return datavalid()"  method="POST">
                <h1>Sign Up</h1>
                <table>
                    <tr>
                        <td width="50%">First Name</td>
                        <td><input type="text" name="fname" placeholder="First Name"></td>
                    </tr>
                    <tr>
                        <td>Last Name</td>
                        <td><input type="text" name="lname" placeholder="Last Name"></td>
                    </tr>
                    <tr>
                        <td>NIC</td>
                        <td><input type="text" name="nic" placeholder="National Identy Card No"></td>
                    </tr>
                    <tr>
                        <td>Mobile No</td>
                        <td><input type="text" name="mob" placeholder="07XXXXXXXX"></td>
                    </tr>
                    <tr>
                        <td>E-mail</td>
                        <td><input type="email" name="email" placeholder="123@abc.com"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" name="pw" placeholder="Password"></td>
                    </tr>
                    <tr>
                        <td>Confirm Password</td>
                        <td><input type="password" name="cpw" placeholder="Re-Enter Password"></td>
                    </tr>
                </table>
                <center><input type="submit" name="submit" value="Sign Up"></center>
            </form>
            <p style="font-weight: normal">Already have account?
                    <a href="login.php">&nbsp; Login</a>
                    </p>
        </div>
    </body>
</html>