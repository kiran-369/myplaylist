<? php

session_start();

include("connection.php") ;
include("functions.php") ;

$user_data=check_login($conn)
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
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
<style type="text/css">
	
	}


	#text{
            

        height: 200 px;
        border-radius: 10 px;
        padding: 10 px;
        border: solid  #aaa;
        width: 100%;

	}

	#button{

		padding: 10 px;
		width: 100 px;
		color: white ;
		background-color: light blue;
		border: none;

	}

	#box{
       

       background-color: gradient (#4A0303);
       margin-top: 10px;
       margin-left: 100px;
       width: 300px;
       padding: 20px;

	}



</style>


 <div id="box">
 	
 	<form method="post">
 		<div style="font-size: 30px; margin: 10px; color: white">myPlaylist Login</div>


         <label for="Lname">Login_Name:</label><br>
 		<input id="text" type="text" name="Login_Name"><br><br>
 		<label for="Password">Password:</label><br>
 		<input id="text" type="Password" name="Password"><br><br>

 		<input type="submit" value="Login"><br><br>

 		<a href="signup.php" style="font-size: 20px; margin: 10px, background-color: light blue">New User? Click to Sign Up</a><br><br>


 	</form>



 </div>

</body>
</html>

