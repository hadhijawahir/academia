<!DOCTYPE html>

<html>
<head>
<title>Admin Panel | Academia</title>
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
       
	<h1>Admin Panel</h1>
        <div class="one_quarter">
        	<a href="records.php">Student Records</a>
        </div>
        <div class="one_quarter">
        	<a href="add_course.php">Add a Course</a>
        </div>  
        <div class="one_quarter">
        	<a href="add_news_events.php">Add News & Events</a>
        </div>
             
      <!-- / main body -->
      
      <div class="clear"></div>
    </main>
  </div>
</div>
<!-- ################################################################################################ --> 

<?php include('include/footer.php') ?>