
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
    if($_POST["Name"]!="")
    {
        $collection->updateOne( array("Username"=>$u),array('$set'=>array("Name"=>$_POST["Name"])));
    }
    if($_POST["Age"]!="")
    {
        $collection->updateOne(array("Username"=>$u),array('$set'=>array("Age"=>$_POST["Age"])));
    }
    if($_POST["Department"]!="")
    {
        $collection->updateOne(array("Username"=>$u),array('$set'=>array("Department"=>$_POST["Department"])));
    }
    if($_POST["Email"]!="")
    {
        $collection->updateOne(array("Username"=>$u),array('$set'=>array("Email"=>$_POST["Email"])));
    }
    if($_POST["Biography"]!="")
    {
        $collection->updateOne(array("Username"=>$u),array('$set'=>array("Biography"=>$_POST["Biography"])));
    }
    if($_POST["Rarea"]!="")
    {
        $collection->updateOne(array("Username"=>$u),array('$set'=>array("Rarea"=>$_POST["Rarea"])));
    }
    if($_POST["Projects"]!="")
    {
        $collection->updateOne(array("Username"=>$u),array('$set'=>array("Projects"=>$_POST["Projects"])));
    }
    if($_POST["Routput"]!="")
    {
        $collection->updateOne(array("Username"=>$u),array('$set'=>array("Routput"=>$_POST["Routput"])));
    }
    if($_POST["Prizes"]!="")
    {
        $collection->updateOne(array("Username"=>$u),array('$set'=>array("Prizes"=>$_POST["Prizes"])));
    }
    if($_POST["Publications"]!="")
    {
        $collection->updateOne(array("Username"=>$u),array('$set'=>array("Pubications"=>$_POST["Publications"])));
    }
    
	
    echo"Profile Updated";
    // session_unset();
    // session_destroy();

?>
<html>

	<body>
		<button><a href ="log.php"> Home</a></button>
        <!-- <button><a href="login.php"> PROFILE </a></button> -->
        <button onclick='goBack()'>PROFILE</button>
        <script>
        function goBack(){
            window.history.go(-2);
        }
    </script>
	</body>
</html>