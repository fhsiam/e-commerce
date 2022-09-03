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
  <style>
  .cart_img{
	  
	  width: 80px
	  hight: 80px
	  object-fit:contain;
  }
  </style>
 
 </head>
 
 
 <body>
 
 <!-- navbar -->
 <!-- 1st child-->
 <div class = "contain-fluid  " >
 
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
     
    </ul>
    
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
	  
	  
	  
	  
	  <div class "container">
	    
	    <div class="col">
		
		
		<form action="" method="post">   
		
		<table class="table table-bordered text-center">
		
	<thead>
		
		<tr>
		    <th>Product title</th>
			<th>Product Image</th>
			<th>Quantity</th>
			<th>Total Price</th>
			<th>Remove</th>
			<th colspan=2>Operations</th>
		</tr>
	  
	  
	  
	  
	  
	  
	  
	  </thead> 
	<tbody>
	
	
	
	<!-- display dynamic data-->
	<?php
	
	$ip=getIPAddress();
	$total_price=0;
	$cart_query = "select * from `cart_details` where ip_address ='$ip'";
	
	$result=mysqli_query ($con,$cart_query);
	while($row=mysqli_fetch_array($result))
		
	
	{
		
		$product_id=$row['product_id'];
		$select_products= "select * from `products` where product_id ='$product_id'";
		$result_products=mysqli_query($con, $select_products);
		
		while ($row_product_price=mysqli_fetch_array($result_products))
			
		{
			
			$product_price= array($row_product_price['product_price']);
		    $price_table=$row_product_price['product_price'];
			$product_title=$row_product_price['product_title'];
			$product_image1=$row_product_price['product_image1'];
			$product_value= array_sum($product_price);
			$total_price+=$product_value;
			
			
			
			
		
	?>
	     
		 <tr>
		 
		     <td> <?php echo $product_title ?></td>
			 <td><img src=" <?php echo $product_image1 ?>"
			 alt="" class="cart_img"></td>
			 <td><input type="text" name="qty" id="qty" class="form-input w-50"> </td>
			 
			 
			 
			 
			 
			 <?php
			 
			 $ip=getIPAddress();
			 
			 
			 if(isset ($_POST['update_carts']))
		 
	 {
		 $category_title=$_POST['qty'];
		 
		
		 
		$insert_query = "update `cart_details` set `quantity` ='$category_title' where
					 ip_address='$ip'";
		 
		 
		 $results=mysqli_query($con,$insert_query);
		 $total_price=$total_price*$category_title;
		 
		 if($results)
			 
			 {
				 echo "<script>alert ('Category has been inserted seccessfully')</script>";
				 
			 }
			 else
			 {echo "<script>alert ('sorry')</script>";}
	 
	
	 }
			 ?>
			 
			 
			 
			 
			 
			 
			 
			 
			 <td><?php echo $price_table ?> /-</td>
			 <td><input type="checkbox"></td>
			 <td>
			    
				
				<input class="text-info px-3 py-2 border-0 mx-3" 
				type="submit" value ="Update Cart" name="update_carts">
				
				
				
				<button class="text-info px-3 py-2 border-0">Remove</button>
			 
			 
			 </td>
			 </tr>
			 
			 <?php
			 	}
	}
			 
			 ?>
			 
			 
			 
			 
			 
	
	</tbody>
	
	  </table>
	
	 
       <div class ="d-flex mb-5 ">
	   
	   
	      <h4 class=""px-2">Subtotal <strong class="text-info"> <?php echo $total_price ?>/- </strong></h4>
		  <a href= "main.php"><button class="bg-info px-3 border-0 mx-3"> Continue Shooping</button></a>
		   <a href= ""><button class="bg-secondary px-3 border-0 text-light"> Checkout</button></a>

	   
	
	   </div>
	   
	   
 </div>
	
	
	
</div>
	  
</form>

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