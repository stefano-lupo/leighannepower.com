<?
header( "refresh:1;url=../manager.php" );
$servername = "localhost";
$username = "leighann_site";
$password = "Insomnia16";
$dbname = "leighann_site";
		
// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname);
		
// Check connection
if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
}
print_r($_POST);

$hidden = $_POST['hidden'];

if($hidden == "upload"){
	
  $orientation = $_POST['orientation'];	

  $target_dir = "../img/header/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
  // Check if image file is a actual image or fake image
  if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
          echo "File is an image - " . $check["mime"] . ".";
          $uploadOk = 1;
      } else {
          echo "File is not an image.";
          $uploadOk = 0;
      }
  }
  // Check if file already exists
  if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
  }
  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
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
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
          $query = 'INSERT INTO `header-pics` VALUES (null,"'.$target_file.'","'.$orientation.'","1")';
          echo "<br><br>".$query."<br><br>";
          if(mysqli_query($conn,$query)){
          	echo "Write to DB Successful";
          } else {
          	echo "write to DB failed";
          }
          echo "<h2>The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.</h2>";
          echo"<h3>Redirecting back to manager..</h3>";
      } else {
          echo "Sorry, there was an error uploading your file.";
      }
	}
}

else if($hidden == "delete_ls"){
	
	$id = $_POST['submit'];

    $query = 'UPDATE `header-pics` SET active = "0" WHERE ID = '.$id;
    echo "<br>".$query ."<br>";
  	if(mysqli_query($conn,$query)){
  		echo "Image succesfully removed <br> Redirecting back to manager";
  	} else{
  		echo "Error in Removing Image <br>Redirecting back to manager.";
  	}
  	
} 
else if($hidden == "add_ls"){
	
	$id = $_POST['submit'];

    $query = 'UPDATE `header-pics` SET active = "1" WHERE ID = '.$id;
    echo "<br>".$query ."<br>";
  	if(mysqli_query($conn,$query)){
  		echo "Image succesfully added <br> Redirecting back to manager";
  	} else{
  		echo "Error in adding Image <br>Redirecting back to manager.";
  	}
  	
}

else if($hidden == "delete_portrait"){
	
	$id = $_POST['submit'];

    $query = 'UPDATE `header-pics` SET active = "0" WHERE ID = '.$id;
    echo "<br>".$query ."<br>";
  	if(mysqli_query($conn,$query)){
  		echo "Image succesfully removed <br> Redirecting back to manager";
  	} else{
  		echo "Error in Removing Image <br>Redirecting back to manager.";
  	}
  	
}

else if($hidden == "add_portrait"){
	
	$id = $_POST['submit'];

    $query = 'UPDATE `header-pics` SET active = "1" WHERE ID = '.$id;
    echo "<br>".$query ."<br>";
  	if(mysqli_query($conn,$query)){
  		echo "Image succesfully added <br> Redirecting back to manager";
  	} else{
  		echo "Error in adding Image <br>Redirecting back to manager.";
  	}
}  

/*
else if($hidden == "update"){
 	$title = $_POST['title'];
    $sub_title = $_POST['sub_title'];
    $id = $_POST['submit'];
  
  	$query = 'UPDATE news SET Headline = "'.$title.'", Sub_Headline = "'.$sub_title.'", Active = 1, Date_Added = "'.date("Y-m-d H:i:s").'" WHERE ID = '.$id;
  	mysql_query($query);
}

else if($hidden == "delete_from_server"){
//	Not actually deleting from server yet, just removing from database -- files still aailable images/news/..
 	$id = $_POST['submit'];
  	$query = 'UPDATE news SET Active = 3 WHERE ID = '.$id;
 	mysql_query($query);
  	echo $query;
}

else if($hidden == "ammend") {
 	$title = $_POST['title'];
    $sub_title = $_POST['sub_title'];
    $id = $_POST['submit'];
  
   	$query = 'UPDATE news SET Headline = "'.$title.'", Sub_Headline = "'.$sub_title.'", Active = 1 WHERE ID = '.$id;
    echo "<br>".$query ."<br>";
  	mysql_query($query);
  	echo"<h2>News item created</h2><h3>Redirecting back to News Manager</h3>"; 
}


else {
  	$id = $_POST['delete'];
  	$query = "UPDATE news SET Active = 2 WHERE ID = '$id'";
  	echo $query;
  	mysql_query($query);
}*/

  
  
  
?>