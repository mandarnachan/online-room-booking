<?php 
session_start();
//error_reporting(E_ALL);
ini_set('display_errors',0);
require_once("connection.php");
include_once("functions.php");
$errmsg =  "";
$flag = 0;
if(isset($_POST)){
	$email_id =  mysqli_real_escape_string($con,addslashes(specialchars($_POST["email_id"])));
	$password = encryptdata($_POST["password"]);
	
	$checkQ =  "select * from tbl_users where email = '".$email_id."' and password = '".$password."' ";
	$result = $con->query($checkQ);
	if ($result->num_rows > 0){
		while($row = $result->fetch_assoc()){
			if(!isset($_SESSION['u_id']) && $_SESSION['u_id']==''){
				$_SESSION['u_id'] = $row['uid'];
				$_SESSION['name'] = $row['first_name']." ".$row['last_name'];
				$_SESSION['email'] = $row['email'];
			}
		}
		$flag=1;
	}else{
		$flag=0;
		$errmsg =  "Email id or password doesn't match with database";
	}
}else{
	$flag=0;
	$errmsg =  "Please enter email id and password";	
}

echo json_encode(array('msg'=>$errmsg,'flag'=>$flag));
?>