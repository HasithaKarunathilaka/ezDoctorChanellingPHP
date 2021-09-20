<?php
	session_start();
	/*if(!isset($_SESSION["aid"]))  {
		header("Location: ./admin_log.php");
		exit;
	}*/
?>

<html>
<head>
	<title>Admin | Add Doctor</title>
    <link rel="stylesheet" href="../CSS/style.css">	
    <link rel="stylesheet" href="../CSS/admin_style.css">

    <script language="javascript">
            
            function datavalid(){
                if(document.admin_add_doc.txtDocName.value=='') {
                    alert("Please enter Full Name");
                    return false;
                }
                if(document.admin_add_doc.specialization.value=='') {
                    alert("Please Select Specialization");
                    return false;
                 }
                if(document.admin_add_doc.txtDocFee.value=='') {
                    alert("Please enter Doctor Fee");
                    return false;
                }
                if(document.admin_add_doc.DocEmail.value=='') {
                    alert("Please enter Email Address");
                    return false;
                }
                if(document.admin_add_doc.DocTel.value=='') {
                    alert("Please enter Telephone Number");
                    return false;
                }
                if(document.admin_add_doc.DocDate.value=='') {
                    alert("Please Select Channeling Date");
                    return false;
                }
                if (document.admin_add_doc.DocTime.value==''){
		            alert("Please Select Session Start Time");
		            return false;
	            }
                else{
                    return confirm;
                }
            }
            
        </script>

</head>
<body>

    <header>
        <img src="../Images/head.jpg" width="100%" height="100%">
 
    </header>
   

		
	<div class="sidebar">
		<ul>
			<li><a href="admin_home.php">&nbsp;Home</a></li>
			<li><a href="doc.php">&nbsp;Doctors</a></li>
			<li class="active"><a href="adddoc.html">&nbsp;Add Doctor</a></li>
			<li><a href="mem.php">&nbsp;Members</a></li>
            <li><a href="app.php">&nbsp;Appointments</a></li>
            <li><a href="upapp.php">&nbsp;Update Appointments</a></li>
			<li><a href="../PHP/admin_logout.php">&nbsp;Logout</a></li>
		</ul>
	</div>

    <div class="adddocpanel">
        <h1>ADMIN | ADD DOCTOR</h1>
        <form action="../PHP/admin_adddoc.php" name="admin_add_doc" method="POST" onsubmit="return datavalid()">
            <p>Full Name</p>
            <input type="text" name="txtDocName" placeholder="Saman Perera">
            <p>Specialization</p>
			<select name="specialization">
				<option selected>General</option>
				<option>Family Medicine</option>
				<option>Internal Medicine</option>
				<option>Emergency Medicine</option>
				<option>Allergy and Immunology</option>
				<option>Psychiatry</option>
				<option>Surgery</option>
				<option>Cardiology</option>
				<option>Dermatology</option>
				<option>Pathology</option>
				<option>Pediatrics</option>
				<option>Urology</option>
            </select>
            <p>Fee</p>
            <input type="text" name="txtDocFee" placeholder="1000">
            <table border="0">
                <tr>
                    <td><p>Email</p></td>
                    <td><p>Telephone</p></td>
                </tr>
                <tr>
                        <td><input type="email" name="DocEmail" placeholder=""></td>
                        <td><input type="text" name="DocTel" placeholder=""></td>
                    </tr>
                <tr>
                    <td><p>Date</p></td>
                    <td><p>Time</p></td>
                </tr>
                <tr>
                    <td><input type="date" name="DocDate"></td>
                    <td><input type="time" name="DocTime"></td>
                </tr>
                <tr>
                    <td><center><input type="reset" name="clr" value="CLEAR"></center></td>
                    <td><center><input type="submit" name="submit" value="ADD"></center></td>
                </tr>
            </table>
        </form>


    </div>

</body>
</html>