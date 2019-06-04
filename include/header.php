<?php error_reporting(0);?>
<?php require_once('include/connection.php'); ?>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">

<!-- ################################################################################################ --> 

<div class="wrapper row0">
  <div id="topbar" class="clear"> 
  
    <!-- ################################################################################################ -->
    
    <nav>
      <ul>
      <?php require_once('function/functions.php'); ?>
			<?php 
					checkSession();
					if(isset($_SESSION['userlogid'])){
								$query_getid_tblusers = "SELECT * FROM `tbl_users` WHERE `user_id` = '{$_SESSION['userlogid']}'";
								$result_getid_tblusers = mysql_query($query_getid_tblusers);
								$row_getid_tblusers  = mysql_fetch_assoc($result_getid_tblusers);
								$username =  $row_getid_tblusers['username'];
						echo "You are Logged in as " . $username . "<br>";
							if("{$_SESSION['userlogid']}" == 1){
								echo "<li><a href=\"admin.php\">Admin Panel</a></li>";
								echo "<li><a href=\"logout.php\">Log Out</a></li>";
								}
							else{
								echo "<li><a href=\"profile.php\">Profile</a></li>";
								echo "<li><a href=\"downloads.php\">Downloads</a></li>";
								echo "<li><a href=\"news_events.php\">News & Events</a></li>";								
								echo "<li><a href=\"logout.php\">Log Out</a></li>";
								}
						}
					else{
						echo "<li><a href=\"login.php\">Login</a></li>";
						echo "<li><a href=\"register.php\">Register</a></li>";
						}
            ?>
      </ul>
    </nav>
    <!-- ################################################################################################ --> 
  </div>
</div>

<!-- ################################################################################################ --> 

<div class="wrapper row1">
  <header id="header" class="clear"> 
    <!-- ################################################################################################ -->
    <div id="logo" class="fl_left">
      <h1><a href="index.php">Academia</a></h1>
      <p>Unlock Your Potential!</p>
    </div>
    <div class="fl_right">
      <form class="clear" method="post" action="#">
        <fieldset>
          <legend>Search:</legend>
          <input type="text" value="" placeholder="Search Here">
          <button class="fa fa-search" type="submit" title="Search"><em>Search</em></button>
        </fieldset>
      </form>
      <br>

            <!-- Javascript Clock --> 
      
            <div id="time" style="color:#FFF; float:right;"></div>      
            <script>
            function time(){
            var date = new Date();

            var hour = date.getHours();
            var minutes = date.getMinutes();
            var seconds = date.getSeconds();
            
            var clock = document.getElementById('time');
            clock.innerHTML ="Time - " + hour + ":" + minutes + ":" + seconds;
            }
            
            setInterval(time,100);
            </script>
            
    </div>
    
    <!-- ################################################################################################ --> 
 
  </header>
</div>

<!-- ################################################################################################ --> 

<div class="wrapper row2">
  <div class="rounded">
    <nav id="mainav" class="clear"> 
    
      <!-- ################################################################################################ -->
      
      <ul class="clear">
        	<li <?php if($thisPage == 'home'){echo 'class="active"';} ?>><a href="index.php">Home</a></li>
            <li <?php if($thisPage == 'about'){echo 'class="active"';} ?>><a href="about.php">About Us</a></li>
            <li <?php if($thisPage == 'courses'){echo 'class="active"';} ?>><a href="courses.php">Courses</a></li>
            <li <?php if($thisPage == 'gallery'){echo 'class="active"';} ?>><a href="gallery.php">Gallery</a></li>
            <li <?php if($thisPage == 'contact'){echo 'class="active"';} ?>><a href="contact.php">Contact Us</a></li>

      </ul>
      <!-- ################################################################################################ --> 
    </nav>
  </div>
</div>
