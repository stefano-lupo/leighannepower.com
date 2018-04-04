<?php


 
function connect() {

// 	Static so all 'instances / method calls' use same copy of $connection variable -- avoids connecting more than once
	static $connection;

//	Only re-connect if connection not established
	if (!isset($connection)) {
/* 		Houses Db Credentials and is located outside of document root and inaccesible through web -- Not sure how to access this file
		$config = parse_ini_file('../config.ini');
		$connection = mysqli_connect($config['servername'], $config['username'], $config['password'], $config['dbname']);*/

		$servername = "localhost";
		$username = "leighann_site";
		$password = "Insomnia16";
		$dbname = "leighann_site";
		$connection = mysqli_connect($servername, $username, $password, $dbname);
	}


// 	Check connection
	if (!$connection) {
		die("Connection failed: " . mysqli_connect_error());
	}
	
	return $connection;
}

function getMatrix($query) {

//	Connect to DB using connect() -- returns connection if present or connects if not present
	$connection = connect();
	if ($result = mysqli_query($connection, $query)) {
		$matrix = array();
		while ($row = mysqli_fetch_assoc($result)) {
			array_push($matrix, $row);
		}
		mysqli_free_result($result);
		return $matrix;
	} else {
		echo "<br>Query returned no results <br>";
		return mysqli_error($connection);
	}
}

function escapeString($value) {
    $connection = db_connect();
    return "'" . mysqli_real_escape_string($connection,$value) . "'";
}

function disp($string){
	echo "<br>".$string;
}
?>