<?php

include'connect.php';
include ('./connect.php');
include ('./common_function.php');




?>



<!doctype html>



<html>


 <head> <title>  eBuy </title>
 
 
 <!--   bootstrap css link-->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
 integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
 crossorigin="anonymous">
 
 <!-- front awsome link -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
 integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
 crossorigin="anonymous" 
 referrerpolicy="no-referrer" />
 
 
  <link rel="stylesheet" href = "Style.css">
 
 </head>
 
 
 <body>
 
 <!-- navbar -->
 <!-- 1st child-->
 <div class = "contain-fluid" pd - 0>
 
 <nav class="navbar navbar-expand-lg navbar-light bg-info">
 <img src = "./images/logo.jpg" alt "Avatar" class = "logo" >
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="main.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="display_all_product.php">Product</a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" href="User_registation.php">Register</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#">Contact</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="cart.php">cart<sup> <?php cart_item();?></sup></a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="#"><?php  price() ; ?>-</a>
      </li>
    </ul>
    <form class="d-flex">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-light" type="submit">Search</button>
    </form>
  </div>
</nav>



<!--2nd child -->
 <nav class="navbar navbar-expand-lg navbar-light bg-secondary">
 
 <ul class="navbar-nav me-auto">
 
 <li class="nav-item">
        <a class="nav-link" href="#">Welcome Guest</a>
      </li>
	  
	  <li class="nav-item">
        <a class="nav-link" href="user_login.php">Login</a>
      </li>
	</ul>
</nav>	
	  
	  <!--3rd child-->
	  
  <div class="bg-white">
  
  <h3 class= "text-center"> eBuy Store </h3>
  <h5 class="text-center">Customer satisfaction is our main motto</h5>
 
 </div>
 
     
	            <!--fourth child-->
	  
	  
	  
<div class="row">
	  
	  
	  <div class= "col-md-2 bg-secondary p-0">
	  
	  <!-- Brands -->
	  
	  <ul class="nabar-nav me-auto text-center">
        <li class="nav-item bg-info">
        <a href= "#" class= "nav-link text-light"> <h4>	Brands </h4> </a>
		</li>
		
		
		
		
		<!-- fetch brand_title from db -->
		
		
		
		<?php
		
		get_brands();
		
		?>
		
		
	  </ul>
	  
	  
	  
	  
	  
	     <!--categories-->
		
		
		<ul class="nabar-nav me-auto text-center">
        <li class="nav-item bg-info">
        <a href= "#" class= "nav-link text-light"> <h4>	Categories </h4> </a>
		</li>
		
		
		
		<?php
		
		get_category();
	
		?>
	
	</ul>	
	
    </div>
	
	
	
	
	
	
	
	<!-- products --> 
	
	
	
  <div class= "col-md-10">
	    

    <div class="row">
   
	   <?php
	    cart();
		getIPAddress();
		get_products();
		get_unique_category();
		get_unique_brand();
		$ip = getIPAddress();  
echo 'User Real IP Address - '.$ip;
		
		?>
 

</div>
</div>



	   



	   



</div>	   
	       
	  
  </div>
	   
	  
    <!----mmjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjjj>
	  
</div>
	  
	   
 
 
 
 
 
 <!--last child-->
 
 <div class = "bg-info p-2 text-center">
 
 <p>All rights reserved ©- designed by Faisal Hossain -2022</p>
 
 </div>
 
 
 
 
 
 <!-- bootstrap js link-->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
 integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
 crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" 
crossorigin="anonymous"></script>
 
 
 
 
 </body>





</html> 