<?php require_once('include/connection.php'); ?>
<?php require_once('function/functions.php'); ?>

<?php 

//print_r ($_POST);

if (isset($_POST['login']) && $_POST['login'] == "LOGIN"){
	
	if(empty($_POST['username']) || empty($_POST['password'])){
		$message = base64_encode(urlencode(("Mandatory fields are missing")));
		header('Location:login.php?msg=' . $message);
		exit();
		}
	
	else{
		
		$_POST['password'] = sha1($_POST['password']);
		
		$query_getcount_tblusers = "SELECT COUNT( * ) AS `logincount` FROM `tbl_users` WHERE `username` = '{$_POST['username']}' AND `password` = '{$_POST['password']}'";	
		$result_getcount_tblusers = mysql_query($query_getcount_tblusers);
		$row_getcount_tblusers = mysql_fetch_assoc($result_getcount_tblusers);
			if($row_getcount_tblusers['logincount'] == 1){
				$query_getid_tblusers = "SELECT `user_id` FROM `tbl_users` WHERE `username` = '{$_POST['username']}' AND `password` = '{$_POST['password']}'";
				$result_getid_tblusers = mysql_query($query_getid_tblusers);
				$row_getid_tblusers = mysql_fetch_assoc($result_getid_tblusers);
				
			/*If Login is Successful, Creating a Session with the User ID*/
				checkSession();
				$_SESSION['userlogid'] = $row_getid_tblusers['user_id'];
				$message = base64_encode(urlencode("Logged in Successfully"));
				
				if($row_getid_tblusers['user_id'] == 1){
					header('Location:admin.php?msg=' . $message);	
					exit();
				}
				
				else{
					header('Location:profile.php?msg=' . $message);	
					exit();
				}
							
			}
			else{
				$message = base64_encode(urlencode("Username or Password Incorrect"));
				header('Location:login.php?msg=' . $message);
				exit();
				}
		}
	
	
	
	
	
	
	
	
	
	
	
}


?>
