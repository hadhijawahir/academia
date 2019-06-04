<?php require_once('include\connection.php'); ?>
<?php
session_start();

if (isset($_SESSION['userlogid'])){
		session_unset($_SESSION['userlogid']);
		$message = base64_encode(urlencode(("Logged Out Successfully")));
		header('Location:login.php?msg=' . $message);
		exit();
	}

?>