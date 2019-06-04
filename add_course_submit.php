<?php require_once('include\connection.php');?>
<?php

//print_r($_POST);

if(isset($_POST['submit']) && $_POST['submit'] == "ADD COURSE"){
	
	if(empty($_POST['programme_id']) || empty($_POST['title']) || empty($_POST['details']) || empty($_POST['entry_requirements']) ||  empty($_POST['duration']) ||  empty($_POST['fees'])){
		//echo "Mandatory Fields Missing";
		$message = base64_encode(urlencode("One or more fields Missing"));;
		header('Location:add_course.php?msg=' . $message); 
		
		exit();
		}
	else{
			$query_insert_tblusers = "INSERT INTO `academia`.`tbl_courses` (
			`course_id` ,`programme_id` ,`title` ,`details` ,`entry_requirements` ,`duration` ,`fees`)
			VALUES (
			NULL , '{$_POST['programme_id']}', '{$_POST['title']}', '{$_POST['details']}', '{$_POST['entry_requirements']}', '{$_POST['duration']}', '{$_POST['fees']}'
			)";
			
			$result_insert_tblusers = mysql_query($query_insert_tblusers); //This is used to start the insertion process into the database
				if(mysql_affected_rows() == 1){
					$message = base64_encode(urlencode("Course Added Successfully"));
					header('Location:add_course.php?msg=' . $message); //This shows the path when the register button is clicked		
					exit();
					}
				else{
					echo "Query Process Error";
					}
		}
	
}
?>