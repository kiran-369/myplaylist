<<?php 

function check_login($conn)

{

if(isset($_SESSION['userid']))
{
	$id= $_SESSION['userid'];
	$query= "Select * from users where $userid = '$id' limit 1";

     $result = mysqli_query($conn, $query);

	if($result && mysqli_num_rows($result) > 0)	 {
		$user_data = mysqli_fetch_assoc($result);
         return $user_data;

     }

			


 
 // redirect to login page


header("Location: login.php");

die;
}

}

function random_num($length)
{

   $test ="";

   if($length < 5) {
     $length =5;
     }
     else {
      $len = rand(4,$length);
    for ($i=0; $i < $len ; $i++) { 
    
       $text .= rand(0,9);
    }

     }

    

    return $text;

}
?>