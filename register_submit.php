<?php require_once('include\connection.php');?>
<?php

//print_r($_POST);

if(isset($_POST['submit']) && $_POST['submit'] == "REGISTER"){
	
	if(empty($_POST['fname']) || empty($_POST['lname']) || empty($_POST['email']) || empty($_POST['username']) ||  empty($_POST['password']) ||  empty($_POST['contact']) ||  empty($_POST['address'])){
		//echo "Mandatory Fields Missing";
		$message = base64_encode(urlencode("Mandatory Fields Missing"));;
		header('Location:register.php?msg=' . $message); 
		
		exit();
		}
	else{
		/*Creating Logic to insert registration data*/
		$query_selectcount_tblusers = "SELECT COUNT( * ) AS `profilecount` FROM `tbl_users` WHERE `email` = '{$_POST['email']}'  OR `username` = '{$_POST['username']}'";
		$result_selectcount_tblusers = mysql_query($query_selectcount_tblusers);
		$row_selectcount_tblusers = mysql_fetch_assoc($result_selectcount_tblusers);
		
		if($row_selectcount_tblusers['profilecount'] == 1){
			echo "Username or Email has been duplicated";
			}
		else{
			//echo "Registration Successful";
			$_POST['password'] = sha1($_POST['password']); // Converting to an Encrypted format which cannot be decrypted
			$query_insert_tblusers = "INSERT INTO `academia`.`tbl_users` (
			`user_id` ,`fname` ,`lname` ,`email` ,`username` ,`birthday` ,`gender` ,`password` ,`contact` ,`address`)
			VALUES (
			NULL , '{$_POST['fname']}', '{$_POST['lname']}', '{$_POST['email']}', '{$_POST['username']}', '{$_POST['birthday']}', '{$_POST['gender']}', '{$_POST['password']}', '{$_POST['contact']}', '{$_POST['address']}'
			)";
			
			$result_insert_tblusers = mysql_query($query_insert_tblusers); //This is used to start the insertion process into the database
				if(mysql_affected_rows() == 1){
					$message = base64_encode(urlencode("Registration Successful"));
					header('Location:login.php?msg=' . $message); //This shows the path when the register button is clicked		
					exit();
					}
				else{
					echo "Query Process Error";
					}
			}
	}
}
?>