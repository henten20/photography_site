<?php
/*
// Variable assignment
$var1 = "Hello";
$var2 = 500;

// Variable concatination
echo $var1." Henry";
*/
//DEFINE ('DB_USER', 'henten20');
//DEFINE('DB_PASSWORD', 'NeedSpeed0);
//DEFINE('DB_HOST', 'localhost');
//DEFINE('DB_NAME', 'photography');

//$dbc = @mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)


//$user = 'root';
//$pass = '';
//database = 'photography';

//$db = new mysqli('localhost', $user, $pass, $database) or die("Unable to connect");

$servername = "localhost";
$username = "henten20";
$password = "NeedSpeed0";
$db = "photography";

// creating connection
$conn = mysqli_connect($servername, $username, $password, $db); 
if($conn)
		echo 'Connected successfully';
	
	// setting the date
	//date_default_timezone_set('UTC');

	// All variable types automatically generate the datatype
	// Will also get NULL if not initialized
	
	// This will grab the information sent from the html
	$firstName = $_POST['firstname'];
	$lastName = $_POST['lastname'];
	$userEmail = $_POST['email'];
	$userMessage = $_POST['message'];
	
	// inserting into the table
	$sql = "INSERT INTO queries(first, last, email, message)VALUES($firstName, $lastName, $userEmail, $userMessage)";
	
	$query = mysqli_query($conn, $sql);
	
	if($query)
		echo "<p>Thank you for your submission!</b>";
		
	$conn->close();
?>


