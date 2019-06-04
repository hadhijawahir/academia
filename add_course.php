<!DOCTYPE html>

<html>
<head>
<title>Add Course | Academia</title>
<?php include('include/header.php') ?>
<!-- ################################################################################################ -->
<style>
input{
	display:inline;
	width:100%;
}
</style>
<!-- ################################################################################################ --> 

<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
    
      <!-- main body --> 

      <h1 align="center">Add a new Course</h1>
		    <form action="add_course_submit.php" method="post">
                <table border = "1" align="center" width="100%">
                <tr><td>Programme_ID (refer below)</td><td><input type="text" name="programme_id" placeholder="programme id"/></td></tr>
                <tr><td>Title</td><td><input type="text" name="title" placeholder="title"/></td></tr>
                <tr><td>Details</td><td><input type="text" name="details" placeholder="details"/></td></tr>
                <tr><td>Entry Requirements</td><td><input type="text" name="entry_requirements" placeholder="entry requirements"/></td></tr>                
                <tr><td>Duration</td><td><input type="text" name="duration" placeholder="duration"/></td></tr>
                <tr><td>Fees</td><td><input type="text" name="fees" placeholder="fees"/></td></tr>
                <tr><td><input type="reset" name="reset" /></td><td><input type="submit" name="submit" value="ADD COURSE" /></td></tr>
                </table>
            </form>
            <p style="color:#F00;">	Please enter proper Programme ID according to the following - <br>
				<table border = "1" align="center" width="100%">
                <tr><td>Foundation Programmes</td><td>1</td></tr>
                <tr><td>Diploma Programmes</td><td>2</td></tr>
                <tr><td>HND Programmes</td><td>3</td></tr>
                <tr><td>Undergraduate Programme</td><td>4</td></tr>
                <tr><td>Postgraduate Programmes</td><td>5</td></tr>
                </table>
			</p>	
<p style="color:#F00; font-size:24px;"><?php include_once('include/message.php') ?></p>
      <!-- ################################################################################################ --> 
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>
<!-- ################################################################################################ --> 
<?php include('include/footer.php') ?>
