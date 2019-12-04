
<?php
    session_start();
	echo "Welcome to the SIGN-UP PAGE <br>";
    //include("main.php");
	require 'vendor/autoload.php';
    $client = new MongoDB\Client;
	$db=$client->Faculty;
    $collection=$db->Faculty_Info; 
    $u= $_SESSION["uname"];
    $p=$_SESSION["pass"];
	$document =array(
        "Username"=> $u,
        "Password"=>$p,
        "Name"=>$_POST["Name"],
        "Age"=>$_POST["Age"],
        "Department"=>$_POST["Department"],
        "Email"=>$_POST["Email"],
        "Biography"=>$_POST["Biography"],
        "Rarea"=>$_POST["Rarea"],
        "Projects"=>$_POST["Projects"],
        "Routput"=>$_POST["Routput"],
        "Prizes"=>$_POST["Prizes"],
        "Publications"=>$_POST["Publications"],

    );
    $collection->insertOne($document);
    echo"Profile Created";
    session_unset();
    session_destroy();

?>
<html>

	<body>
		<button><a href ="home.php"> Home</a></button>
	</body>
</html>