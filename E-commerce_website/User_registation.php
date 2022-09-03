


<?php

/*include'connect.php';*/
include ('./connect.php');



if(isset ($_POST['Register']))
		 
	 {
		 $name=$_POST['username'];
		 $email=$_POST['email'];
		 $password=$_POST['password'];
		 
		 
		 
		 
		 
		 
		
		 
		$insert_query = "INSERT INTO `registration` (`id`,`name`, `email`, `password`) VALUES ('', '$name', '$email','$password')";
		 
		 
		 $result=mysqli_query($con,$insert_query);
		 
		 if($result)
			 
			 {
				 echo "<script>alert ('Userinfo has been inserted seccessfully')</script>";
				header("Location: user_login.php");
                  exit;
				 
			 }
			 else
			 {echo "<script>alert ('sorry')</script>";}
	 
	}
?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Registation</title>
	
	
	
	<!--   bootstrap css link-->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
 integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
 crossorigin="anonymous">
 
 <!-- front awsome link -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
 integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
 crossorigin="anonymous" 
 referrerpolicy="no-referrer" />
</head>
<body>
<main>
    <form action="" method="post">
        <h1>Sign Up</h1>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" placeholder="username">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="email">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="password">
        </div>
        <div>
            <label for="password2">Confirm Password :</label>
            <input type="password" name="password2" id="password2" placeholder="Confirm Password">
        </div>
        <div>
            <label for="agree">
                <input type="checkbox" name="agree" id="agree" value="yes"/> I agree
                with the
                <a href="#" title="term of services">term of services</a>
            </label>
        </div>
		<input type="submit" name = "Register" value = "Register" class= "bg-info"/>
        <footer>Already a member? <a href="user_login.php">Login here</a></footer>
    </form>
</main>




<!-- bootstrap js link-->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
 integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
 crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" 
crossorigin="anonymous"></script>



<div class = "bg-info p-3 text-center">
 
 <p>All rights reserved ©- designed by Faisal Hossain -2022</p>
 
 </div>
</body>




</html>