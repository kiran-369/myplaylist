<? php

session_start();

if ($_SERVER['REQUEST_METHOD'] == "POST")

 {
// if something is posted
    $userid = random_num(20);
    $fname =  $_POST['fname'];
     $lname = $_POST['lname'];
    $logname =  $_POST['logname'];
    $password =  $_POST['password'];
 	$Mnumber = $_POST['Mnumber'];
 	$Email = $_POST['email'];

 	if (empty($fname) && empty($lname) && empty($logname) && empty($Password) && empty($Mnumber) && empty($email) ) {
          
          echo "Enter all fields";
      }

 else { 
// if all the fields are filled (not empty)             
//insert data to database
$result = "INSERT INTO users (userid, fname, lname, logname, password, Mnumber, Email) VALUES ('".$_POST['userid']."', '".$_POST['fname']."','".$_POST['lname']."', '".$_POST['logname']."' ,'".$_POST['password']."', '".$_POST['Mnumber']."', '".$_POST['email']."'");
            
        }

}

 		mysqli_query($conn, $result);

        header ("Location: login.php");

        die;
 	}

    else
 	{
 		echo " Please enter valid login information or else contactUS";

 	}
}



?>


<!DOCTYPE html>
<html>
<head>
	<title>SignUP
   </title>
   <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">



	<style>
body {
	background-image: linear-gradient(to bottom, #E3D2D2, #4A0303);

background-repeat: no-repeat;
background-attachment: fixed;
background-size: cover;
}


</style>
</head>
<body>
<?php include 'navigation.html' ?>
<?php include 'connection.php' ?>
<?php include 'functions.php' ?>


<style type="text/css">
	
	}





	#text{
            
        height: 40px;
        border-radius: 10px;
        padding: 10px;
        border: solid  #aaa;
        width: 100%;

	}

	#button{

		padding: 20px;
		width: 180px;
		color: white;
		background-color: green;
		border: none;

	}

	#box{
       
       margin-top: 10px;
       margin-left:100px;
       width: 300px;
       padding: 20px;

	}



</style>


 <div id="box">
 	
 	<form action="connection.php" method="POST" >
 		<div style="font-family: sans-serif;    font-size: 35px; margin: 10px; color : white">SignUp for free</div><br><br><br>
         
        
 	<label for="fname">First name</label><br>
        <input type="text" id="First Name" name="fname"><br><br>
        <label for="lname">Last name</label><br>
        <input type="text" id="Last Name" name="lname"><br><br>
        <label for="logname">Login_Name</label><br>
        <input id="text" type="Login_Name" name="Login_Name"><br><br>
        <label for="Password">Password</label><br>
        <input id="text" type="Password" name="Password"><br><br>
        <label for="Mnumber">Mobile Number</label><br>
        <input type="Number" id="Mobile Number" name="Mnumber"><br><br>
        <label for="Email">Email</label><br>
        <input type="Email" id="Email" name="Email"><br><br>

 		<input id= "button" type="submit" value="SIGN UP"><br><br>

 		<a href="login.php" style="font-size: 20px; margin: 10px, background-color: light blue">Have an account?Login</a><br><br>


 	</form>



 </div>

</body>
</html>
?>
