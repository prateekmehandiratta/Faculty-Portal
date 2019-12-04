<?php
   session_start();
	echo "Welcome to the faculty portal <br>";
   
	require 'vendor/autoload.php';
   $client = new MongoDB\Client;
	$db=$client->Faculty;
	$collection=$db->Faculty_Info;
	$cursor=$collection->find();
   if($collection->count()==0)
   {
      echo "<script>alert('Database is empty,please register first!')</script>";
      echo "Database is empty,please register first <br>";
      exit();
   }
   $flag=0;
   
	foreach($cursor as $document)
   {
      if($document["Username"]==$_POST["Username"])
   	{
         $flag=1;
      	if($document["Password"]==$_POST["Password"])
         {
         	echo "--------------PROFILE------------------<br>";
            echo "Name : ". $document["Name"]."<br>";
            echo "Age : ". $document["Age"]."<br>";
				echo "Department : ".$document["Department"]."<br>";
				echo "Email : ".$document["Email"]."<br>";
				echo "Biography : ".$document["Biography"]."<br>";
				echo "Research Area : ".$document["Rarea"]."<br>";
				echo "Projects : ".$document["Projects"]."<br>";
				echo "Research Output : ".$document["Routput"]."<br>";
				echo "Prizes : ".$document["Prizes"]."<br>";
            echo "Publications : ".$document["Publications"]."<br>";
            
            $uname=$_POST["Username"];
            $pass=$_POST["Password"];
            $_SESSION["uname"]=$uname;
            $_SESSION["pass"]=$pass;
            // $_SESSION["name"]=$document["Name"];
            // $_SESSION["age"]=$document["Age"];
            // $_SESSION["depart"]=$document["Department"];
            // $_SESSION["email"]=$document["Email"];
            // $_SESSION["biography"]=$document["Biography"];
            // $_SESSION["rarea"]=$document["Rarea"];
            // $_SESSION["projects"]=$document["Projects"];
            // $_SESSION["routput"]=$document["Routput"];
            // $_SESSION["prizes"]=$document["Prizes"];
            // $_SESSION["publications"]=$document["Publications"];
            }
         else
         {
         	echo "Incorrect Password <br>";
            echo "<script>alert('Incorrect Password!')</script>";
            echo "Press Back(<-) to continue!!!";
            exit();
         }
      }
   }
   if($flag==0)
   {
      echo "<script>alert('Username doesn't exist, please register first!')</script>";
      echo "Username doesn't exist, please register first <br>";
      echo "Press Back(<-) to continue!!!";
      exit(); 
   }
?>
<html>
	<body>
      <button><a href="home.php">HOME</a></button>
      <button><a href="test1.php">EDIT INFO</a></button>
      <button><a href="delete.php">DELETE</a></button>
</body>
</html>