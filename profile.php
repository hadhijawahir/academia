<!DOCTYPE html>

<html>
<head>
<title>Profile | Academia</title>
<?php include('include/header.php') ?>

<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
					<?php
					//Unauthorized Access
                            checkSession();
                            if(!isset($_SESSION['userlogid'])){
                                $message = base64_encode(urlencode("Please Login again"));
                                header('Location:login.php?msg=' . $message);
                                exit();
                                }
                    ?>
      <!-- main body --> 
      <!-- ################################################################################################ -->
      <?php include_once('include/message.php'); ?><br>
	  
	  <br>

	  <?php
			$query_getid_tblusers = "SELECT * FROM `tbl_users` WHERE `user_id` = '{$_SESSION['userlogid']}'";
			$result_getid_tblusers = mysql_query($query_getid_tblusers);
			$row_getid_tblusers  = mysql_fetch_assoc($result_getid_tblusers);

			$fullname =  $row_getid_tblusers['fname'] . "&nbsp" . $row_getid_tblusers['lname'];
			echo "<h1 align=\"center\">Welcome". "&nbsp" . $fullname . "</h1>";
			
			 
			echo "<table border=\"1\" align=\"center\" width=\"50%\" height=\"300px\">";
						echo "<tr><th>" . "First Name" ."</th><td align = \"center\">" . $row_getid_tblusers['fname'] . "</td></tr>";
						echo "<tr><th>" . "Last Name" ."</th><td align = \"center\">" . $row_getid_tblusers['lname'] . "</td></tr>";
						echo "<tr><th>" . "Email" ."</th><td align = \"center\">" . $row_getid_tblusers['email'] . "</td></tr>";
						echo "<tr><th>" . "Gender" ."</th><td align = \"center\">" . $row_getid_tblusers['gender'] . "</td></tr>";
						echo "<tr><th>" . "Birthday" ."</th><td align = \"center\">" . $row_getid_tblusers['birthday'] . "</td></tr>";
						echo "<tr><th>" . "Address" ."</th><td align = \"center\">" . $row_getid_tblusers['address'] . "</td></tr>";
						echo "<tr><th>" . "Contact" ."</th><td align = \"center\">" . $row_getid_tblusers['contact'] . "</td></tr>";
						echo "<tr><th>" . "Username" ."</th><td align = \"center\">" . $row_getid_tblusers['username'] . "</td></tr>";	
			echo "</table>";
						echo "<br/>";
						$user_id = $row_getid_tblusers['user_id'];
			echo "<a href=\"profile_edit.php?user_id=$user_id\">Edit Profile</a>";
	  ?>
      
      
      <!-- ################################################################################################ --> 
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>
<!-- ################################################################################################ --> 

<?php include('include/footer.php') ?>