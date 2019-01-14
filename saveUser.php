<?php 
session_start();
require_once("connection.php");
include_once("functions.php");

if(isset($_POST)){
	
	$fname =  mysqli_real_escape_string($con,addslashes(specialchars($_POST["fname"])));
	$lname =  mysqli_real_escape_string($con,addslashes(specialchars($_POST["lname"])));
	$email =  mysqli_real_escape_string($con,addslashes(specialchars($_POST["email"])));
	$contact_no =  mysqli_real_escape_string($con,addslashes(specialchars($_POST["contact_no"])));
	$ip_add = getIPAddress();
	
	$newFilePath = "uploads/".$_FILES['fileupload']['name'];
	$password = encryptdata("olrb".mt_rand(100000, 999999));
	
	if(isset($_FILES) && $_FILES['fileupload']['name']!=''){
		move_uploaded_file($_FILES['fileupload']['tmp_name'],$newFilePath);
	}
	
	$query =  "INSERT INTO `tbl_users`(`first_name`, `last_name`, `email`, `password`, `phone_no`, `user_image_path`
				,`role`,`ip_addess`,`isdelted`) 
				values('".$fname."','".$lname."','".$email."','".$password."','".$contact_no."','".$newFilePath."','U','".$ip_add."',0)";
	$result = $con->query($query);
	
	if($result){
		// send email to user with there username and password
		// send email to admin that new user has been registred to system
	}
	header('Location: register.php');
}
?>