<!DOCTYPE html>

<html>
<head>
<title>Student Records | Academia</title>
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

      <?php include_once('include/message.php'); ?><br>
	  
	  <br>

	  <?php
			$query_getid_tblusers = "SELECT * FROM `tbl_users`";
			$result_getid_tblusers = mysql_query($query_getid_tblusers);
			

			echo "<h1 align=\"center\">Student Records</h1>";
			
			echo "<table border=\"1\" align=\"center\" width=\"100%\" height=\"100%\">";
						echo "<tr><th>" . "User_ID" . "</th>";
						echo "<th>" . "First Name" . "</th>";
						echo "<th>" . "Last Name" . "</th>";
						echo "<th>" . "Email" . "</th>";
						echo "<th>" . "Gender" . "</th>";
						echo "<th>" . "Birthday" . "</th>";
						echo "<th>" . "Address" . "</th>";
						echo "<th>" . "Contact" . "</th>";
						echo "<th>" . "Username" . "</th></tr>";
			
			while($row_getid_tblusers  = mysql_fetch_assoc($result_getid_tblusers)){			
						echo "<tr><td>" . $row_getid_tblusers['user_id'] . "</td>";
						echo "<td>" . $row_getid_tblusers['fname'] . "</td>";
						echo "<td>" . $row_getid_tblusers['lname'] . "</td>";
						echo "<td>" . $row_getid_tblusers['email'] . "</td>";
						echo "<td>" . $row_getid_tblusers['gender'] . "</td>";
						echo "<td>" . $row_getid_tblusers['birthday'] . "</td>";
						echo "<td>" . $row_getid_tblusers['address'] . "</td>";
						echo "<td>" . $row_getid_tblusers['contact'] . "</td>";
						echo "<td>" . $row_getid_tblusers['username'] . "</td></tr>";
			}
			echo "</table>";
			 

			echo "<br/>";

	  ?>
      
      
      <!-- / main body -->
      
      <div class="clear"></div>
    </main>
  </div>
</div>

<!-- ################################################################################################ --> 

<?php include('include/footer.php') ?>