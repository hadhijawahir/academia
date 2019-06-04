<?php require_once('include\connection.php'); ?>

<?php

function checkSession(){
	if(empty(session_id())){
        session_start();
    }
}

?>