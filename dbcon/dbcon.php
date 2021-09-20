<?php
	$host="localhost";
	$dbuser="root";
	$dbpassword="";
	$dbase="ezdoc";
		
	$conn = new mysqli ($host, $dbuser, $dbpassword, $dbase) or die("Can't connect to server");	
	
?>