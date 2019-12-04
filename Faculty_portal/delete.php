<?php
    session_start();
	//echo "Welcome to the UPDATE PAGE <br>";
    //include("main.php");
	require 'vendor/autoload.php';
    $client = new MongoDB\Client;
	$db=$client->Faculty;
    $collection=$db->Faculty_Info;
    $u= $_SESSION["uname"];
    $p=$_SESSION["pass"];
    $collection->deleteOne(array("Username"=>$u));
    echo "DELETED SUCCESSFULLY!!<br>";
?>
<html>
	<body>
		<button><a href ="home.php"> Home</a></button>
	</body>
</html>