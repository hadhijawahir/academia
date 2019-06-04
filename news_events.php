<!DOCTYPE html>

<html>
<head>
<title>News & Events | Academia</title>
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
	  <h1 align="center">Latest News & Events</h1>
	  <br>

	        <?php
            $query_getid_tblusers = "SELECT * FROM `tbl_uploads`";
			$result_getid_tblusers = mysql_query($query_getid_tblusers);
			
			echo "<table border=\"1\" align=\"center\" width=\"100%\" height=\"300px\">";			
						while($row_getid_tblusers  = mysql_fetch_assoc($result_getid_tblusers)){
						echo "<tr><td align = \"center\">" . "<img src=\"news_events/{$row_getid_tblusers['name']}\" width=\"400px\" height=\"400px\"\">" . "</td></tr>";
						}
			echo "</table>";
			?>
          
      <!-- / main body -->
      
      <div class="clear"></div>
    </main>
  </div>
</div>
<!-- ################################################################################################ --> 

<?php include('include/footer.php') ?>