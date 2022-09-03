
<?php

/*include'connect.php';*/
include ('./connect.php');







if (isset($_POST["login"])) {
    if(!empty($_POST["username"]) && !empty($_POST["password"])) {
      $username = $_POST["username"];
      $password = $_POST["password"];
      $username = stripcslashes($username);
      $password = stripcslashes($password);
      $username = mysqli_real_escape_string($con, $username);
      $password = mysqli_real_escape_string($con, $password);
      $login = "select * from registration where name = '$username' and password = '$password'";
      $result = mysqli_query($con, $login);
      $count = mysqli_num_rows($result);
      if ($count == 1) {
        header("Location: main.php");
        echo "<p>Login</p>";
      } 
	  
	  if($username == 1 && $password==1 )
		  
	  
	  {
		  
		  header("Location: admin.php");
		  
	  }
	  
	  else {
        echo "<p>Failed 2</p>";
      }
    } else {
      echo "<p>Failed 1</p>";
    }
  }







?>









 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Login</title>
	
	
	
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
        <h1>LogIn</h1>
        <div>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" placeholder="username">
        </div>
        <div>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" placeholder="password">
        </div>
        
        
		<input type="submit" name = "login" value = "Login" class="bg-info"/>
		
        <footer>Do not have an account? <a href="User_registation.php">Register here</a></footer>
		
        
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