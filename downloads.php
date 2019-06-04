<?php include('include/header.php') ?>

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
	  <h1>DOWNLOADS</h1>
      <a href="uploads/app_form.pdf" style="font-size:16px;">Application Form</a>
      <br><br>
      <a href="uploads/rules.pdf" style="font-size:16px;">Rules and Regulations</a>
    
      <!-- / main body -->
      
      <div class="clear"></div>
    </main>
  </div>
</div>
<!-- ################################################################################################ --> 

<?php include('include/footer.php') ?>