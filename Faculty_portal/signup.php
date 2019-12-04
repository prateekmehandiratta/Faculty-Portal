<?php
	session_start();
	echo "Welcome to the SIGN-UP PAGE <br>";

	require 'vendor/autoload.php';
    $client = new MongoDB\Client;
	$db=$client->Faculty;
	$collection=$db->Faculty_Info;
	$cursor=$collection->find();
	$availability=1;
	$uname=$_POST["Username"];
	$pass=$_POST["Password"];
	$_SESSION["uname"]=$uname;
	$_SESSION["pass"]=$pass;
	foreach($cursor as $document)
   	{
      	if($document["Username"]==$_POST["Username"])
      	{
      		$availability=0;
      	}
    }
    if($availability==0)
    {
    	echo "<script>alert('Username already taken!')</script>";
    	echo "Username already taken <br>";
    	exit();
    }
    if($_POST["Password"]!=$_POST["Confirm_Password"])
    {
    	echo "<script>alert('Password does not match!')</script>";
    	echo "Password does not match";
    	exit();
    }
    
   echo "<script>alert('registration successful!!')</script>";
   echo "You have been registered<br>";
   include("test.php");
?>