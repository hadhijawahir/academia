<div class="wrapper row3">
  <div class="rounded">
    <main class="container clear"> 
      <!-- main body --> 
      <!-- ################################################################################################ -->
      <div class="sidebar one_third first"> 
        <!-- ################################################################################################ -->
        <h6>Programmes</h6>
        <nav class="sdb_holder">
   	<?php
	//programmes
		$query_select_tblprogrammes = "SELECT * FROM  `tbl_programmes`";
		$result_select_tblprogrammes = mysql_query($query_select_tblprogrammes);
		echo "<ul>";
		
		while($row_select_tblprogrammes = mysql_fetch_assoc($result_select_tblprogrammes)){
			$prog_id = base64_encode(urlencode($row_select_tblprogrammes ['programme_id']));
			echo "<li>" . "<a href='courses.php?prog_id=$prog_id'>" . $row_select_tblprogrammes ['programme_id']. " - " . $row_select_tblprogrammes ['title']. "</a>" ."</li>" ;
			
			//courses
				$query_select_tblcourses = "SELECT * FROM `tbl_courses` WHERE `programme_id`= '{$row_select_tblprogrammes['programme_id']}'";
				$result_select_tblcourses = mysql_query($query_select_tblcourses);			
				
					if(isset($_GET['prog_id']) && urldecode(base64_decode($_GET['prog_id'])) == $row_select_tblprogrammes['programme_id']){
					echo "<ul>";
						while($row_select_tblcourses = mysql_fetch_assoc($result_select_tblcourses)){
							$course_id = base64_encode(urlencode($row_select_tblcourses['course_id']));
							echo "<li>" . "<a href='courses.php?prog_id=$prog_id&course_id=$course_id'>" . $row_select_tblcourses['title'] . "</a>" . "</li>";
							}
					echo "</ul>";	
					}
										
		};

				
		echo "</ul>";
	?>
        </nav>   
    </div>