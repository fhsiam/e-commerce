<!doctype html>


<html>

<head>

<title> admin site </title>

<!--   bootstrap css link-->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
 integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
 crossorigin="anonymous">


 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
 integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
 crossorigin="anonymous" 
 referrerpolicy="no-referrer" />


<link rel="stylesheet" href = "Style.css">

</head>



<body>


<!--1st child -->
<div class="container-fluid">
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<div class="container-fluid">

<img src="./images/logo.jpg" alt = "" class="logo">



<nav class ="navbar navbar-expand-lg">

<ul  class= "navbar-nav" >

<li class= "navbar-item">
<a href "" class= "nav-link ">welcome guest </a>
</li>




 </ul>

</nav>
 </div>

</nav>
</div>








<!-- 2nd child-->

<div class =" bg-light">
<h1 class ="text-center p-2"> Admin <h1>
</div>



<!-- 3rd child -->

  <nav class="navbar navbar-expand-lg navbar-light bg-info">
  <a class="navbar-brand" > <h4>Admin panel </h4></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <button><a class="nav-link" href="insert_products.php">Insert Product <span class="sr-only">(current)</span></a></button>
      </li>
      <li class="nav-item">
       <button> <a class="nav-link" href="#">View product</a> </button>
      </li>
      <li class="nav-item">
        <button> <a class="nav-link" href="admin.php?insert_categories">Insert Categoris</a> </button>
      </li>
      <li class="nav-item">
        <button> <a class="nav-link " href="admin.php?insert_brands">Insert Brands</a> </button>
      </li>
	  <li class="nav-item">
        <button> <a class="nav-link " href="#">View Brands</a> </button>
      </li>
	  <li class="nav-item">
        <button> <a class="nav-link " href="#">Orders</a></button>
      </li>
	  <li class="nav-item">
        <button> <a class="nav-link " href="#">Payments</a> </button>
      </li>
	  <li class="nav-item">
        <button> <a class="nav-link " href="#">Users list</a> </button>
      </li>
	  <li class="nav-item">
        <button> <a class="nav-link  " href="#">Logout</a> </button>
      </li>
    </ul>
  </div>
</nav>
  
  


<!-- 4th child --->

<div class = "container my-5">

 <?php 
 
        if(isset ($_GET ['insert_categories']))
			
			{
				include ('insert_categories.php');
				
			}
			if(isset ($_GET ['insert_brands']))
			
			{
				include ('insert_brands.php');
				
			}
 
 ?> 


</div>





<!-- bootstrap js link-->
 <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" 
 integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" 
 crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" 
integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" 
crossorigin="anonymous"></script>
 
 
 
 
 <div class = "bg-info p-3 mt-5 text-center   ">
 
 <p>All rights reserved ©- designed by Faisal Hossain -2022</p>
 
 </div>
 
 
 
</body>



</html>