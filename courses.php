<?php $thisPage = 'courses';?>
<?php require_once('include/connection.php'); ?>
<!DOCTYPE html>

<html>
<head>
<title>Courses | Academia</title>
<?php include('include/header.php') ?>

<!-- ################################################################################################ -->

<?php include('include/programme_selection.php') ?>

<div class="two_third">
<?php
	if(isset($_GET['course_id'])){
			$course_id = base64_decode(urldecode($_GET['course_id']));
			$query_select_tblcourses = "SELECT * FROM `tbl_courses` WHERE `course_id`='$course_id'";
			$result_select_tblcourses = mysql_query($query_select_tblcourses);
			while($row_select_tblcourses = mysql_fetch_assoc($result_select_tblcourses)){
				echo "<table border = \"1\" width=\"100%\" height = \"150px\">";
					
				echo "<tr>";
					echo "<td>";
					echo "<b>" . ($row_select_tblcourses['title']) . "</b>";
					echo "</td>";
				echo "</tr>";
				
				echo "<tr>";	
					echo "<td>";
					echo($row_select_tblcourses['details']);
					echo "</td>";
				echo "</tr>";

				echo "<tr>";	
					echo "<td>";
					echo "<b> Entry Requirements: </b> </br>";
					echo ($row_select_tblcourses['entry_requirements']);
					echo "</td>";
				echo "</tr>";
				
				echo "<tr>";	
					echo "<td>";
					echo "<b> Duration: </b> </br>";
					echo ($row_select_tblcourses['duration']);
					echo "</td>";
				echo "</tr>";								
				
				echo "<tr>";	
					echo "<td>";
					echo "<b> Fees: </b> </br>";
					echo ($row_select_tblcourses['fees']);
					echo "</td>";
				echo "</tr>";
				
				echo "</table>";
				}
		}
		else{
			echo "<hr><h1 style=\"color:#55ABDA;text-align:center;\">Please select the required course from the Programmes menu</h1>";
			}
?>
<?php include_once('include/message.php') ?>



</div>

      <!-- ################################################################################################ --> 
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>
<!-- ################################################################################################ --> 
<?php include('include/footer.php') ?>
