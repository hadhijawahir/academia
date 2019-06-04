<!DOCTYPE html>

<html>
<head>
<title>Registration | Academia</title>
<?php include('include/header.php') ?>
<!-- ################################################################################################ -->
<style>
input{
	display:inline;
}
</style>
<!-- ################################################################################################ --> 
<!-- ################################################################################################ --> 

<!-- ################################################################################################ -->
<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->
		    <form action="register_submit.php" method="post">
                <table border = "1" align="center" width="100%">
                <tr><td>FIRST NAME</td><td><input type="text" name="fname" placeholder="first name"/></td></tr>
                <tr><td>LAST NAME</td><td><input type="text" name="lname" placeholder="last name"/></td></tr>
                <tr><td>EMAIL</td><td><input type="email" name="email" placeholder="valid email address"/></td></tr>
                <tr><td>DATE OF BIRTH</td><td><input type="date" name="birthday" placeholder="yyyy-mm-dd"/></td></tr>
                <tr><td>GENDER</td><td><input type="radio" name="gender" value="M" checked="checked" />M<input type="radio" name="gender" value="F" />F</td></tr>
                <tr><td>ADDRESS</td><td><input type="text" name="address" placeholder="address"/></td></tr>                
                <tr><td>CONTACT NUMBER</td><td><input type="tel" name="contact" placeholder="contact number"/></td></tr>
                <tr><td>USERNAME</td><td><input type="text" name="username" placeholder="username"/></td></tr>
                <tr><td>PASSWORD</td><td><input type="password" name="password" placeholder="password"/></td></tr>
                <tr><td><input type="reset" name="reset" /></td><td><input type="submit" name="submit" value="REGISTER" /></td></tr>
                </table>
            </form>	
<p style="color:#F00;"><?php include_once('include/message.php') ?></p>
      <!-- ################################################################################################ --> 
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>
<!-- ################################################################################################ --> 
<?php include('include/footer.php') ?>
