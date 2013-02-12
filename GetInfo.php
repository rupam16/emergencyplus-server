<?php


include("connect.php");

$type = $_POST['type'];

$sql_string = "select * from serviceinfo where service_type='{$type}'";
//$sql_string = "select * from serviceinfo";
$sql = mysql_query($sql_string);

if($sql){
	if(mysql_num_rows($sql)>0){
		while($row = mysql_fetch_assoc($sql)){
			$data[] = $row;
		}
		$return_string = array("status"=>"ok","data"=>$data);
	}
	
	else{
		$return_string = array("status"=>"no","message"=>"no data");
	}
}

else{
	$return_string = array("status"=>"no","message"=>"query error");
}

echo json_encode($return_string);
?>