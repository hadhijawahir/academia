<?php 

$connection = @mysql_connect('localhost','root','');//ip address, username, password

if(!$connection){
	die('Error on Server Connection: ' . mysql_errno() . mysql_error());//die shuts down the connection system
	}

$select_db = mysql_select_db('academia',$connection);//db name, connection name

if(!$select_db){
	die('Error on Database Connection: ' . mysql_errno() . mysql_error());//die shuts down the connection system
	}


?>