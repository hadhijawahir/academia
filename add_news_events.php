<!DOCTYPE html>

<html>
<head>
<title>Add News & Events | Academia</title>
<?php include('include/header.php') ?>

<!-- ################################################################################################ -->
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
      <!-- ################################################################################################ -->
     
            <form action="add_news_events.php" method="post" enctype="multipart/form-data">
            <input type="file" name="image" />
            <input type="submit" name="submit" value="upload" />
            </form>
              
              
            <?php
			
//Uploading to Folder
			
				if(isset($_POST['submit'])){
				
					$target_dir = "news_events/";
					$target_file = $target_dir . basename($_FILES["image"]["name"]);
					$uploadOk = 1;
					$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
					// Check if image file is a actual image or fake image
					if(isset($_POST["submit"])) {
						$check = getimagesize($_FILES["image"]["tmp_name"]);
						if($check !== false) {
							$uploadOk = 1;
						} else {
							echo "File is not an image.";
							$uploadOk = 0;
						}
					}
					
					// Allow certain file formats
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
					&& $imageFileType != "gif" ) {
						echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
						$uploadOk = 0;
					}
					// Check if $uploadOk is set to 0 by an error
					if ($uploadOk == 0) {
						echo "Sorry, your file was not uploaded.";
					// if everything is ok, try to upload file
					} else {
						if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
							echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
						} else {
							echo "Sorry, there was an error uploading your file.";
						}
					}

				echo "<br>";

//Uploading to Database
				  $imageName = $imageData = $imageType = null;
				
				  $imageName = $_FILES["image"]["name"];
				  $imageData = $_FILES["image"]["tmp_name"];
				  $imageType = $_FILES["image"]["type"];
				
				  if(substr($imageType,0,5) == "image"){
					mysql_query("INSERT INTO `academia`.`tbl_uploads` (`id`, `name`, `image`) VALUES('','$imageName','$imageData')");
					echo "Image Uploaded!";
				  }
				  else{
					echo "Has to be an image!";
				  }
				}
				?>    
             
			 

            

 
      <!-- ################################################################################################ --> 
      <!-- / main body -->
      <div class="clear"></div>
    </main>
  </div>
</div>
<!-- ################################################################################################ --> 

<?php include('include/footer.php') ?>