<!DOCTYPE html>

<html>
<head>
<title>Edit Profile | Academia</title>
<?php include('include/header.php') ?>
<style>
input{
	display:inline;
}
</style>
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

      <?php include_once('include/message.php'); ?><br>
	  
	  <br>

	  <?php
			$query_getid_tblusers = "SELECT * FROM `tbl_users` WHERE `user_id` = '{$_SESSION['userlogid']}'";
			$result_getid_tblusers = mysql_query($query_getid_tblusers);
			$row_getid_tblusers  = mysql_fetch_assoc($result_getid_tblusers);

			$fullname =  $row_getid_tblusers['fname'] . "&nbsp" . $row_getid_tblusers['lname'];
			echo "<h1 align=\"center\">Welcome". "&nbsp" . $fullname . "</h1>";
	
	
	echo "<form action=\"profile_update_submit.php\" method=\"post\">";	
			
			echo "<table border=\"1\" align=\"center\" width=\"50%\" height=\"300px\">";
						echo "<tr><th>" . "First Name" . "</th><td align = \"center\">" . "<input type=\"text\" name=\"fname\" value=\"{$row_getid_tblusers['fname']}\">" . "</td></tr>";
						
						
						echo "<tr><th>" . "Last Name" . "</th><td align = \"center\">" . "<input type=\"text\" name=\"lname\" value=\"{$row_getid_tblusers['lname']}\">" . "</td></tr>";
						
						
						echo "<tr><th>" . "Email" . "</th><td align = \"center\">" .  "<input type=\"text\" value=\"{$row_getid_tblusers['email']}\" name=\"email\" />" . "</td></tr>";
						
						
						
						echo "<tr><th>" . "Gender" . "</th>";
						echo "<td align = \"center\">"  ; 						
						if($row_getid_tblusers ['gender'] == "M"){
						echo "<input type=\"radio\" name=\"gender\" value=\"M\" checked=\"checked\" \>" . "Male";
						echo "<input type=\"radio\" name=\"gender\" value=\"F\" \>" . "Female" . "</td></tr>";
						}
						else{
						echo "<input type=\"radio\" name=\"gender\" value=\"M\"  \>" . "Male";
						echo "<input type=\"radio\" name=\"gender\" value=\"F\" checked=\"checked\" \>" . "Female" . "</td></tr>";
							}
							
						echo "<tr><th>" . "Birthday" ."</th><td align = \"center\">" . "<input type=\"text\" value=\"{$row_getid_tblusers['birthday']}\" name=\"birthday\">" . "</td></tr>";

						echo "<tr><th>" . "Address" ."</th><td align = \"center\">" . "<input type=\"text\" value=\"{$row_getid_tblusers['address']}\" name=\"address\">" . "</td></tr>";

						echo "<tr><th>" . "Contact" ."</th><td align = \"center\">" . "<input type=\"text\" value=\"{$row_getid_tblusers['contact']}\" name=\"contact\">" . "</td></tr>";
						
						echo "<tr><th>" . "Username" . "</th><td align = \"center\">" . "<input type=\"text\" value=\"{$row_getid_tblusers['username']}\" name=\"username\" />" . "</td></tr>";	
				
			echo "</table>";
			
						echo "<br/>";

						echo "<input type=\"submit\" name=\"submit\" value=\"Update\" \>";
						
						echo "<input type=\"hidden\" name=\"user_id\" value=\"{$_SESSION['userlogid']}\" />";
						
	echo "</form>";
			?>
            
        </div>  
  	 </div>
     
<!-- ################################################################################################ -->

<?php include_once('include/footer.php'); ?>   