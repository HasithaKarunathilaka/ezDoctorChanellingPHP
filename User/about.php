<?php
	session_start();
	if(!isset($_SESSION["uemail"]))  {
		header("Location: ../login.php");
		exit;
	}
?>
<html>
<head>
	<title>About | eZ Channeling</title>
	<link rel="stylesheet" href="../CSS/style.css">
</head>
<body>

	<header>
	<img src="../Images/head.jpg" width="100%" height="100%">
 
	</header>

		
		<div class="sidebar">
			<ul>
				<li><a href="home.php">&nbsp;Home</a></li>
				<li><a href="makeapp.php">&nbsp;Make Appointment</a></li>
				<li><a href="myapp.php">&nbsp;My Appointments</a></li>
				<!--<li><a href="updateapp.php">&nbsp;Update My Appointments</a></li>
				<li><a href="canclebookings.php">&nbsp;Cancle My Appointments</a></li>-->
				<li class="active"><a href="about.php">&nbsp;About</a></li>
				<li><a href="contact.php">&nbsp;Contact</a></li>
				<li><a href="../PHP/logout.php">&nbsp;Logout</a></li>
			</ul>
		</div>

		
		<div class="main">
			<div class="content">
				<h1>About</h1>
				<br>
				<p><span class="p_start">Lorem ipsum</span> dolor sit amet, consectetur adipiscing elit. Suspendisse non velit felis. Vestibulum eget vestibulum orci. Praesent sit amet porta eros. Nam ullamcorper lacinia mi ac iaculis. Proin vestibulum nisl id nibh volutpat imperdiet. Duis nec quam erat. Duis volutpat id elit quis elementum. Suspendisse vestibulum lacus mi, id mollis ante lobortis vitae. Nulla id rhoncus elit. Duis et malesuada lorem. Duis dolor massa, accumsan vel tincidunt tempus, ultrices quis neque. Suspendisse pretium nisl quis consectetur pretium. Vestibulum gravida vestibulum orci, sit amet interdum quam vulputate ut.</p>
				<br>
				<p><span class="p_start">Ut</span> tempor risus felis. Nulla dictum arcu in augue eleifend pretium. Vivamus et pellentesque mi. Phasellus dolor turpis, lacinia quis suscipit non, euismod id nisi. Nulla commodo pellentesque dui eget fringilla. Donec accumsan lorem vel tortor mollis, eget rhoncus ligula maximus. Sed semper quam id auctor vestibulum. In a nibh vitae augue vulputate blandit non vel ex. Nullam sit amet erat pulvinar nulla luctus dapibus eget sed nulla. Vivamus sollicitudin fringilla tellus ac tristique. Sed congue eu elit at dapibus.</p>
			</div>
		</div>

</body>
</html>