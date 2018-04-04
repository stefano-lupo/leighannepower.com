<?php
  // Create and Access Session Variables
  session_start();
?>

<html>
	<head>
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!--		<link rel="stylesheet" href="css/creative.css">-->
		<style>
			h1 {
				text-align: center;
			}
			input{
				width:100%;
			}
			#login-button{
				width:100%;
			}
		</style>
	</head>
	<body>

<?

 
  //Post Variables Correct: Unlogged in but Login is correct. Store info in Session Variable
  if ((($_POST['user']== "leighanne") && ($_POST['pass'] = "Insomnia16"))){
    $_SESSION['un'] = $_POST['user'];
    $_SESSION['pw'] = $_POST['pass'];
    showPage();
 }
  
  //Session Variables Correct: Previously Logged in. Grant Access to page
   else if (($_SESSION['un'] == "leighanne") && ($_SESSION['pw'] == "Insomnia16")){
    showPage();
  }
  
  //No Session Variables or POST Variables yet: First Time Accessing Page
  else if( (  (empty($_SESSION['un'])) && (empty($_SESSION['pw']))  ) &&
           (  (empty($_POST['user'])) && (empty($_POST['pass']) ) ) ) {
             echo "<h1>Leighannepower.com site Manager </h1>";
             echo '<p class="text-center">Please Enter Your Login Details</p>';

?>

		<div class="container-fluid larger-container">
			<form method="POST" action="manager.php">
				<div class="row">
					<div class="col-md-offset-4 col-md-1 col-xs-6">
						<p>
							Username
						</p>
					</div>
					<div class="col-xs-6 col-md-3">
						<input type="text" name="user">
					</div>
				</div>
				<div class="row">
					<div class="col-md-1 col-md-offset-4 col-xs-6">
						<p>
							Password
						</p>
					</div>
					<div class="col-xs-6 col-md-3">
						<input type="password" name="pass">
					</div>
				</div>
				<div class="row">
					<div class="col-md-offset-5 col-md-3 col-xs-6">
						<button type="submit" name="submit" id="login-button" value="Go">Login</button>
					</div>
				</div>
			</form>
		</div>

		<?
		}

		//Session Variables and Post Variables are incorrect. Re-Enter Log in Details
		else{
		     echo "<h1>Leighannepower.com site Manager </h1>";
             echo '<p class="text-center">Incorrect Login Details</p>';
		?>
		<div class="container-fluid larger-container">
			<form method="POST" action="manager.php">
				<div class="row">
					<div class="col-md-offset-4 col-md-1 col-xs-6">
						<p>
							Username
						</p>
					</div>
					<div class="col-xs-6 col-md-3">
						<input type="text" name="user">
					</div>
				</div>
				<div class="row">
					<div class="col-md-1 col-md-offset-4 col-md-1 col-xs-6">
						<p>
							Password
						</p>
					</div>
					<div class="col-xs-6 col-md-3">
						<input type="password" name="pass">
					</div>
				</div>
				<div class="row">
					<div class="col-md-offset-5 col-xs-6 col-md-3">
						<button type="submit" name="submit" id="login-button" value="Go">Login</button>
					</div>
				</div>
			</form>
			</div>
		<?

		}

		/************************************** End of Login Logic *****************************************/

		function showPage(){

		function disp($string){
		echo "<br>".$string;
		}

		function getMatrix($query){
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

		// $query = "SELECT * FROM `header-pics`";

		if ($result = mysqli_query($conn, $query)) {
		$matrix = array();
		while ($row = mysqli_fetch_assoc($result)) {
		array_push($matrix,$row);
		}
		mysqli_free_result($result);
		return $matrix;
		} else{
		echo "<br>Query returned no results <br>";
		return false;
		}
		}

		$query = "SELECT * FROM `header-pics` WHERE active = 1 AND orientation = \"landscape\"";
		$active_ls = getMatrix($query);

		$query = "SELECT * FROM `header-pics` WHERE active = 0 AND orientation = \"landscape\"";
		$unused_ls = getMatrix($query);

		$query = "SELECT * FROM `header-pics` WHERE active = 1 AND orientation = \"portrait\"";
		$active_port = getMatrix($query);

		$query = "SELECT * FROM `header-pics` WHERE active = 0 AND orientation = \"portrait\"";
		$unused_port = getMatrix($query);
		?>

		<div class="container" id="background">
			<h1 class="text-center">Leighannepower.com Site Manager</h1>
			<p>
				This page is used in to change things on your web site. Currently the only changeable item is the images in the slideshow at the top of the site.
			</p>
			<p>
			I opted to make different slideshows depending of if the device is portrait (mobile) or landscape (desktop).
			<br>
			This allows the user to see better images based on the device they are using
			</p>
			<p>
			The best way to go is to take different images (one for landscape and one for portrait), or one image and just crop them differently to highlight the important parts of the photo!
			</p>
			<br>
			<br>
			<h3>Some Instructions</h3>
			<ol>
				<li>
					<p>
						You can upload photos to the website below and these will automatically be added to the slideshow
					</p>
				</li>
				<li>
					<p>
						The Current Landscape/Portrait Sections show the images that are currently being displayed on the website.
						<br>
						By clicking remove me, you can hide any of the images from the site, but they wont be deleted in case you wish to add them back later
					</p>
				</li>
				<li>
					<p>
						The old landscape/portrait sections show the images that you have uploaded in the passed and hidden from the slideshow.
						<br>
						Should you want to add any of these back in, just click on the use me buttons beside them and they will be visible again!
					</p>
				</li>
			</ol>
			<br>
			<hr>
			<br>
			<!----------------------------------- Header Manager ---------------------------------------------------------->

			<div id="header-manager">
				<!-- Upload new image -->

				<h1>Upload a new image </h1>
				<form action="processing/process-manager.php" method="post" enctype="multipart/form-data">
					<p>
						<strong>IMPORTANT: Ensure landscape images are cropped to 28x9 aspect ratio (1920px x 786 px)</strong>
					</p>
					<p>
						<strong>IMPORTANT: Ensure portrait images are cropped to 9x11 aspect ratio (800px x 978 px)</strong>
					</p>
					<p>
						<strong>Images should also be optimised so that the page loads quicker - use a tool like <a href="http://optimizilla.com/" target="_blank">this!</a></strong>
					</p>
					<br>
					<h3>Select image to upload</h3>
					<input type="file" name="fileToUpload" id="fileToUpload">
					<br>
					<h3>Is this picture for landscape or portrait devices?</h3>
					<input type="radio" name="orientation" value="landscape" checked>
					Landscape - MUST BE 28x9
					<br>
					<input type="radio" name="orientation" value="portrait">
					Portrait - MUST BE 9x11
					<br>
					<br>
					<button type="submit" value="Upload Image" name="submit">Upload</button>
					<input type="hidden" value="upload" name="hidden" id="hidden">
				</form>
				<hr>
				<br>
				<br>

				<h1>Landscape (Desktop)</h1>
				<h2>Current Landscape Images</h2>
				<?
				if ($active_ls[0]['ID'] != null) {

					foreach ($active_ls as $row) {
						echo '<form method="POST" action="processing/process-manager.php">';
						echo '<div class="row">';
						echo '<div class="col-sm-10">';
						echo '<img class="img-responsive" src="' . $row['path'] . '">';
						echo "</div>";
						echo '<div class="col-sm-2">';
						echo '<button id="submit" value="' . $row['ID'] . '" name="submit" type="submit">Remove Me</button>';
						echo '<input id="hidden" name="hidden" type="hidden" value="delete_ls">';
						echo '</div></div></form><hr><br>';
					}
				} else {
					echo "<p>No Current Landscape Images </p>";
					echo "Problem - This means there is no images on desktop version of your site!";
				}
				?>

				<h2>Old Landscape images</h2>
				<?
				// Use Old image
				if ($unused_ls[0]['ID'] != null) {

					foreach ($unused_ls as $row) {
						echo '<form method="POST" action="processing/process-manager.php">';
						echo '<div class="row">';
						echo '<div class="col-sm-10">';
						echo '<img class="img-responsive" src="' . $row['path'] . '">';
						echo "</div>";
						echo '<div class="col-sm-2">';
						echo '<button id="submit" value="' . $row['ID'] . '" name="submit" type="submit">Use Me</button>';
						echo '<input id="hidden" name="hidden" type="hidden" value="add_ls">';
						echo '</div></div></form><hr><br>';
					}
				} else {
					echo "<p>No Old Landscape Images </p>";
				}
				?>

				<br>
				<br>
				<hr>
				<br>
				<br>

				<h1>Portrait (Mobile)</h1>
				<h2>Current Portrait Images</h2>
				<?
				if ($active_port[0]['ID'] != null) {

					foreach ($active_port as $row) {
						echo '<form method="POST" action="processing/process-manager.php">';
						echo '<div class="row">';
						echo '<div class="col-sm-6 col-lg-4">';
						echo '<img class="img-responsive" src="' . $row['path'] . '">';
						echo "</div>";
						echo '<div class="col-sm-2 col-sm-offset-4 col-lg-offset-6">';
						echo '<button id="submit" value="' . $row['ID'] . '" name="submit" type="submit">Remove Me</button>';
						echo '<input id="hidden" name="hidden" type="hidden" value="delete_portrait">';
						echo '</div></div></form><hr><br>';
					}
				} else {
					echo "<p>No Current Portrait Images </p>";
					echo "Problem - This means there is no images on mobile version of your site!";
				}
				?>

				<h2>Old portrait images</h2>
				<?
				// Use Old image
				if ($unused_port[0]['ID'] != null) {

					foreach ($unused_port as $row) {
						echo '<form method="POST" action="processing/process-manager.php">';
						echo '<div class="row">';
						echo '<div class="col-sm-6 col-lg-4">';
						echo '<img class="img-responsive" src="' . $row['path'] . '">';
						echo "</div>";
						echo '<div class="col-sm-2 col-sm-offset-4 col-lg-offset-6">';
						echo '<button id="submit" value="' . $row['ID'] . '" name="submit" type="submit">Use Me</button>';
						echo '<input id="hidden" name="hidden" type="hidden" value="add_portrait">';
						echo '</div></div></form><hr><br>';
					}
				} else {
					echo "<p>No Old Portrait Images </p>";
				}

				} //end function

				/**************************************************************************************************************/
				?>
			</div>
			<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
			<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
			<script src="js/manager.js"></script>
	</body>
</html>