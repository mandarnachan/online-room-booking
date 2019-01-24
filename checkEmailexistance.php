<?php
session_start();

require_once("connection.php");
include_once("functions.php");

if(isset($_POST) && $_POST['total_count']!=''){
	$total_count =  mysqli_real_escape_string($con,addslashes(specialchars($_POST["total_count"])));
	
	$checkQ =  "select * from tbl_users where email = '".$email_id."' ";
	$result = $con->query($checkQ);
	$num_rows = $result->num_rows;
	
	json_encode(array('num_rows'=>$num_rows));
}
?>