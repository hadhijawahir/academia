<?php require_once('include\connection.php');?>
<?php

//print_r($_POST);

if(isset($_POST['submit']) && $_POST['submit'] == "Update"){
	
	$query_update_tblusers = "UPDATE  `academia`.`tbl_users` SET  
`fname` =  '{$_POST['fname']}',
`lname` =  '{$_POST['lname']}',
`email` =  '{$_POST['email']}',
`birthday` =  '{$_POST['birthday']}',
`gender` =  '{$_POST['gender']}',
`address` =  '{$_POST['address']}',
`contact` =  '{$_POST['contact']}',
`username` =  '{$_POST['username']}'
 WHERE  `tbl_users`.`user_id` = {$_POST['user_id']}";

	$result_update_tblusers = mysql_query($query_update_tblusers);
	
	if(mysql_affected_rows() == 0 || mysql_affected_rows() == 1){
		$message = base64_encode(urlencode("Updated Successfully"));
		header('Location:profile.php?msg=' . $message);
		
		exit();		
		}	
	else{
		$message = base64_encode(urlencode("Updating Error"));
		header('Location:profile_edit.php?userid={$_POST["user_id"]}' . $message);
		exit();
		}	
	}
?>
