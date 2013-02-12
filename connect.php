<?php

$host_name = "localhost";
$host_username = "root";
$host_pass = "";

$con = mysql_connect($host_name,$host_username,$host_pass);

if($con){
	if(mysql_select_db("emergencyservice",$con)){
	}
	else{
		//echo "database error";
		echo mysql_error();
		die();
	}
}

else{
	//echo "Database Problem";
	echo mysql_error();
	die();
}
?>