<?php session_start();
if(isset($_SESSION['u_id']) && $_SESSION['u_id']!=''){
	session_destroy();
	header('Location: index.php');
}
?>