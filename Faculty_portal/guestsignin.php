<?php
	echo "HEY GUEST! <br>";

	require 'vendor/autoload.php';
    $client = new MongoDB\Client;
	$db=$client->Faculty;
	$collection=$db->Faculty_Info;
	$cursor=$collection->find();
	if($collection->count()==0)
	{
		echo "<script>alert('Database is empty!')</script>";
		echo "Database is empty";
		exit();
	}
	else
	{
		$flag=0;
		foreach($cursor as $document)
   		{
     	 	if($document["Username"]==$_POST["Username"])
   			{
   				echo "--------------PROFILE------------------<br>";
				echo "Name : ". $document["Name"]."<br>";
				echo "Age : ".$document["Age"]."<br>";
				echo "Department : ".$document["Department"]."<br>";
				echo "Email : ".$document["Email"]."<br>";
				echo "Biography : ".$document["Biography"]."<br>";
				echo "Research Area : ".$document["Rarea"]."<br>";
				echo "Projects : ".$document["Projects"]."<br>";
				echo "Research Output : ".$document["Routput"]."<br>";
				echo "Prizes : ".$document["Prizes"]."<br>";
				echo "Publications : ".$document["Publications"]."<br>";
         		$flag=1;
      		}
   		}
   		if($flag==0)
      	{
      		echo "<script>alert('Username doesn't exist!')</script>";
      		echo "Username doesn't exist <br>";	
      	}
	}
?>
<html>
	<body>
		<button><a href="home.php">HOME</a></button>
</body>
</html>