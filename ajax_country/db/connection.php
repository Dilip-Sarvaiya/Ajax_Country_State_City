<?php
$db = new mysqli("localhost:3307","root","","country_state_city");
if($db->connect_errno){
	echo  $db->connect_error;
	echo $db->connect_errno;
}else{
	//echo "Connection establish successfully";
}
?>
