

<?php

/*include'connect.php';*/
include ('./connect.php');







/*products*/
function get_products()

{
	global $con;
	
	
	if(!isset ($_GET['category'])){
	if(!isset ($_GET['brand'])){
	
	
	
	
	$sql = "SELECT * FROM `products` order by rand() limit 0,3";
$result = $con->query($sql);

if ($result->num_rows > 0) {
	
    while($row = $result->fetch_assoc()) {
		
		
		 $product_id= $row["product_id"];
		 $product_title= $row["product_title"];
		 $product_Description= $row["product_Description"];
		 $brand_id= $row["brand_id"];
		 $category_id= $row["category_id"];
		 $product_image1= $row["product_image1"];
		 $product_image2= $row["product_image2"];
		 $product_image3= $row["product_image3"];
		 $product_price= $row["product_price"];
		 
		
        echo "<div class='col-md-4 mb-2'>
	   <div class='card'>
  <img src= './product_images/$product_image1' 
  class='card-img-top' alt='$product_title'>
  <div class='card-body'>
    <h5 class='card-title'>$product_title</h5>
    <p class='card-text'>$product_Description</p>
	<p class='card-text'>Price $product_price /-</p>
    <a href='main.php?add_to_cart=$product_id' class='btn btn-primary'> Add to cart</a>
	<a href='product_details.php?product_id=$product_id' class='btn btn-primary'> View more</a>
	
  </div>
</div>
</div>";
		
    }
} 	
}
}
}







/*display all products*/



function get_all_products()

{
	global $con;
	
	
	
	
	
	
	
	$sql = "SELECT * FROM `products` order by rand()";
$result = $con->query($sql);

if ($result->num_rows > 0) {
	
    while($row = $result->fetch_assoc()) {
		
		
		 $product_id= $row["product_id"];
		 $product_title= $row["product_title"];
		 $product_Description= $row["product_Description"];
		 $brand_id= $row["brand_id"];
		 $category_id= $row["category_id"];
		 $product_image1= $row["product_image1"];
		 $product_image2= $row["product_image2"];
		 $product_image3= $row["product_image3"];
		 $product_price= $row["product_price"];
		 
		
        echo "<div class='col-md-2 mb-2'>
	   <div class='card'>
  <img src= './product_images/$product_image1' 
  class='card-img-top' alt='$product_title'>
  <div class='card-body'>
    <h5 class='card-title'>$product_title</h5>
    <p class='card-text'>$product_Description</p>
	<p class='card-text'>Price $product_price /-</p>
	<div class='row-md-2 mb-2'>
    <a href='main.php?add_to_cart=$product_id' class='btn btn-primary'> Add to cart</a>
	</div>
	<div class='row-md-2 mb-2'>
	<a href='product_details.php?product_id=$product_id' class='btn btn-primary'> View more</a>
	</div>
  </div>
</div>
</div>";
		
    }
} 	
}























/* Display by category id*/

function get_unique_category()

{
	global $con;
	
	
	if(isset ($_GET['category'])){
	
	$category_id=$_GET['category'];
	
	
	
	$sql = "SELECT * FROM `products` where category_id=$category_id";
$result = $con->query($sql);


 $numofrow=mysqli_num_rows($result);
 
 if($numofrow==0){
	 
	 
	 echo "<h2> No stock available in this category section </h2>";
	 
	 
 }


if ($result->num_rows > 0) {
	
    while($row = $result->fetch_assoc()) {
		
		
		 $product_id= $row["product_id"];
		 $product_title= $row["product_title"];
		 $product_Description= $row["product_Description"];
		 $brand_id= $row["brand_id"];
		 $category_id= $row["category_id"];
		 $product_image1= $row["product_image1"];
		 $product_image2= $row["product_image2"];
		 $product_image3= $row["product_image3"];
		 $product_price= $row["product_price"];
		 
		
        echo "<div class='col-md-4 mb-2'>
	   <div class='card'>
  <img src= './product_images/$product_image1' 
  class='card-img-top' alt='$product_title'>
  <div class='card-body'>
    <h5 class='card-title'>$product_title</h5>
    <p class='card-text'>$product_Description</p>
	<p class='card-text'>Price $product_price /-</p>
    <a href='main.php?add_to_cart=$product_id' class='btn btn-primary'> Add to cart</a>
	<a href='product_details.php?product_id=$product_id' class='btn btn-primary'> View more</a>
	
  </div>
</div>
</div>";
		
    }
} 	
}
}




/* Display by brand_id*/




function get_unique_brand()

{
	global $con;
	
	
	if(isset ($_GET['brand'])){
	
	$brand_id=$_GET['brand'];
	
	
	
	$sql = "SELECT * FROM `products` where brand_id=$brand_id";
$result = $con->query($sql);


 $numofrow=mysqli_num_rows($result);
 
 if($numofrow==0){
	 
	 
	 echo "<h2> No stock available in this brand section </h2>";
	 
	 
 }


if ($result->num_rows > 0) {
	
    while($row = $result->fetch_assoc()) {
		
		
		 $product_id= $row["product_id"];
		 $product_title= $row["product_title"];
		 $product_Description= $row["product_Description"];
		 $brand_id= $row["brand_id"];
		 $category_id= $row["category_id"];
		 $product_image1= $row["product_image1"];
		 $product_image2= $row["product_image2"];
		 $product_image3= $row["product_image3"];
		 $product_price= $row["product_price"];
		 
		
        echo "<div class='col-md-4 mb-2'>
	   <div class='card'>
  <img src= './product_images/$product_image1' 
  class='card-img-top' alt='$product_title'>
  <div class='card-body'>
    <h5 class='card-title'>$product_title</h5>
    <p class='card-text'>$product_Description</p>
	<p class='card-text'>Price $product_price /-</p>
    <a href='main.php?add_to_cart=$product_id' class='btn btn-primary'> Add to cart</a>
	<a href='product_details.php?product_id=$product_id' class='btn btn-primary'> View more</a>
	
  </div>
</div>
</div>";
		
    }
} 	
}
}















/* brands*/
	
	function get_brands()
	
	
	{
		
		global $con;
		
		$sql = "SELECT * FROM brands";
$result = $con->query($sql);

if ($result->num_rows > 0) {
	
    while($row = $result->fetch_assoc()) {
		
		
		 $brand_title= $row["brand_title"];
		 $brand_id= $row["brand_id"];
		
        echo "<li class='nav-item '>
        <a href= 'main.php?brand=$brand_id' class= 'nav-link text-light'> <h6>	$brand_title</h6> </a>
		</li>";
		
    }
} 



		
		
		
		
	}
	
	
	
	
	
	
	/* category */
	
	
	
	function get_category()
	
	
	
	{
		global $con;
		
		$sql = "SELECT * FROM categories";
$result = $con->query($sql);

if ($result->num_rows > 0) {
	
    while($row = $result->fetch_assoc()) {
		
		
		 $category_title= $row["category_title"];
		 $category_id= $row["category_id"];
		
        echo "<li class='nav-item '>
        <a href= 'main.php?category=$category_id' class= 'nav-link text-light'> <h6>	$category_title </h6> </a>
		</li>";
		
    }
} 
		

	}
	
	
	




//view details


function view_details()


{
	
	
	global $con;
	
	
	if(isset($_GET['product_id'])){
	
	$product_id=$_GET['product_id'];
	
	
	$sql = "SELECT * FROM `products` where product_id=$product_id";
$result = $con->query($sql);

if ($result->num_rows > 0) {
	
    while($row = $result->fetch_assoc()) {
		
		
		 $product_id= $row["product_id"];
		 $product_title= $row["product_title"];
		 $product_Description= $row["product_Description"];
		 $brand_id= $row["brand_id"];
		 $category_id= $row["category_id"];
		 $product_image1= $row["product_image1"];
		 $product_image2= $row["product_image2"];
		 $product_image3= $row["product_image3"];
		 $product_price= $row["product_price"];
		 
		
        echo "<div class='col-md-3 mb-4'>
	   <div class='card'>
  <img src= './product_images/$product_image1' 
  class='card-img-top' alt='$product_title'>
  <div class='card-body'>
    <h5 class='card-title'>$product_title</h5>
    <p class='card-text'>$product_Description</p>
	<p class='card-text'>Price $product_price /-</p>
	
    <a href='main.php?add_to_cart=$product_id' class='btn btn-primary'> Add to cart</a>
	
	
	<a href='main.php' class='btn btn-primary'> Go home</a>
	
  </div>
</div>
</div>





<div class ='col-md-4'>
   
         <!--  realted img -->
   
   
   <div class = 'row'> 
   
       <div class='col-md-12'>  

             <h4 class= 'text-center'> Related product </h4>
			 
	   </div>
	   
	   
	   <div class='col-md-6'>  
	   
	       <img src= './product_images/$product_image2' 
            class='card-img-top' alt='$product_title'>
	   
	   </div>
	   
	   
	   <div class='col-md-6'> 

        <img src= './product_images/$product_image3' 
            class='card-img-top' alt='$product_title'>


	   </div>
   
   
   </div>
   
   
    </div>";
		
    }
} 	
	
}
}





//get ip function





	function getIPAddress() {  
    //whether ip is from the share internet  
     if(!empty($_SERVER['HTTP_CLIENT_IP'])) {  
                $ip = $_SERVER['HTTP_CLIENT_IP'];  
        }  
    //whether ip is from the proxy  
    elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {  
                $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];  
     }  
//whether ip is from the remote address  
    else{  
             $ip = $_SERVER['REMOTE_ADDR'];  
     }  
     return $ip;  
}  
  




//cart function



function cart()

{
	
	
	if(isset ($_GET['add_to_cart']))
	
	{
		global $con;
		
		$ip=getIPAddress();
		$get_product_id=$_GET['add_to_cart'];
		
		
		
		$select_query= "select * from `cart_details` where ip_address= '$ip' and
		product_id=$get_product_id";
		
		
		
		$result_query=mysqli_query($con,$select_query);
		
		$numofrow=mysqli_num_rows($result_query);
 
 if($numofrow>0){
	 
	 
	 echo "<script>alert('this item is already present in cart')</script>";
	 echo "<script>window.open('main.php','_self')</script>";
	 
	 
	 
	 
 }else{
	 
	 
	 
	 $insert_query= "insert into `cart_details` (`product_id`,`ip_address`,`quantity`)
	                 values ($get_product_id,'$ip',0)";
					 
     $result_query=mysqli_query($con,$insert_query);
	 echo "<script>alert('this item is added to cart')</script>";
	 echo"<script>window.open('main.php','_self')</script>";
	 
	 
	 
 }
 
 
 
	}
	
	
	
	
	
}








//cart item


function cart_item()


{
	
	
	
	
	
	
	
	if(isset ($_GET['add_to_cart']))
	
	{
		global $con;
		
		$ip=getIPAddress();
		
		
		
		
		$select_query= "select * from `cart_details` where ip_address= '$ip'";
		
		
		
		$result_query=mysqli_query($con,$select_query);
		
		$count_cart_items=mysqli_num_rows($result_query);
		
		
	}
 
 
  else{
	 
	 
	 global $con;
	
		
		$ip=getIPAddress();
		
		
		
		
		$select_query= "select * from `cart_details` where ip_address= '$ip'";
		
		
		
		$result_query=mysqli_query($con,$select_query);
		
		$count_cart_items=mysqli_num_rows($result_query);
	 
	 
 }
	
	
	
	echo $count_cart_items;

	
	



}



//price function

function price()


{
	
	
	global $con;
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
			$product_value= array_sum($product_price);
			$total_price+=$product_value;
			
			
			
			
		}
		
		
		
		
		
	}
	echo  "Total $total_price taka/";
}



?>