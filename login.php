<!DOCTYPE html>

<html>
<head>
<title>Login | Academia</title>
<?php include('include/header.php'); ?>
<title>Login | Academia</title>

<style type="text/css">
<!--
body{
	background-color: #06213F;
	color:#CCC;
}
.logo {
	margin: 70px auto;
	padding: 0;
	width: 100%;
	text-align: center;
	color:#CCC;
	font-weight: bold;
	font-size: 32px;
	font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
	background-repeat: no-repeat;
	background-position: 15px;
}

label{
	color:#CCC;
}

.box{
    background:#fefefe;
    border: 1px solid #C3D4DB;
	border-top:1px;
    -webkit-border-radius:5px;
    -moz-border-radius:5px;
    border-radius:5px;
    -moz-box-shadow:rgba(0,0,0,0.15) 0 0 1px;
    -webkit-box-shadow:rgba(0,0,0,0.15) 0 0 1px;
    box-shadow:rgba(0,0,0,0.15) 0 0 1px;
    color:#444;
    font:normal 12px/14px Arial, Helvetica, Sans-serif;
    margin:0 auto 30px;
	overflow:hidden;
}

.box.login{
	height: 157px;
	width: 280px;
	margin: 0 auto;
	font-weight: bold;
}

.boxBody{
	border-top: 1px solid #dde0e8;
	border-bottom: 1px solid #dde0e8;
	padding: 10px 20px;
	background-color:#09C;
}

.boxBody input{
	border: 1px solid #666;
}

.box footer{
	background: #eff4f6;
	border-top: 1px solid #fff;
	padding: 22px 20px;
	overflow: hidden;
	height: 32px;
}

.box label{
	font: 14px/22px Arial, Helvetica, Sans-serif;
	width: 120px;
	float: left;
}

.box footer label{
	float:left;
	margin:4px 0 0;
}

.btnLogin{
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
	border-radius: 10px;
	background: #06213F;
	border: 1px solid #0CF !important;
	cursor: pointer;
	padding: 11px 16px;
	color: #fff;
	padding: 7px 9px;
	font-family: Verdana, Tahomma, Geneva;
	font-size: 12px;
	line-height: 11px;
	font-weight: bold;
	float: left;
	margin-left: 36px;
}

.btnLogin:hover, .btnLogin:active{
    background:#09C;
}


-->
</style>

</head>

<body>


<div class="logo">Academia Login</div>

<form class="box login" action="login_submit.php" method="post">

  <fieldset class="boxBody" >
	  <label>Username</label>
      <input type="text" style="width:100px" name="username" placeholder="username" /><br /><br />
	  <label>Password</label>
	  <input type="password" name="password" style="width:100px"  placeholder="password"/>
  </fieldset>
  
  <footer>
	  <input type="submit" class="btnLogin" value="LOGIN" name="login"/>
    <input type="reset"   class="btnLogin" value="Clear" />
  </footer>
  
</form>

<p align="center" style="font-size:24px;color:#09C;"><?php include_once('include/message.php'); ?></p>
<br />
<h3 align="center">Please Login using the Username and Password used for registration<br /><br /></h3>

</div>
  
</div>
</body>
</html>