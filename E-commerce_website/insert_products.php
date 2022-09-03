<?php

/*include'connect.php';*/
include ('./connect.php');

?>







<?php

if(isset ($_POST['insert_product']))
		 
	 {
		 $product_title=$_POST['product_title'];
		 $product_Description=$_POST['product_Description'];
		 $brand_id=$_POST['product_brands'];
		 $product_keyword=$_POST['product_Keyword'];
		 
		 $Category_id=$_POST['product_Category'];
		 $product_price=$_POST['product_price'];
		 $product_status='true';
		 
		 
		 
		 
		 //accessing image															
		 $product_image1=$_FILES ['product_image1']['name'];
		 $product_image2=$_FILES ['product_image2']['name'];
		 $product_image3=$_FILES ['product_image3']['name'];
		 
		 
		 
		 //accessing image tmp_name
		 $tmp_image1=$_FILES ['product_image1']['tmp_name'];
		 $tmp_image2=$_FILES ['product_image2']['tmp_name'];
		 $tmp_image3=$_FILES ['product_image3']['tmp_name'];










             move_uploaded_file ($tmp_image1,"./product_images/".$product_image1);
			 move_uploaded_file ($tmp_image2,"./product_images/".$product_image2);
			 move_uploaded_file ($tmp_image3,"./product_images/".$product_image3);
		 
		 
		 
		 
		 
		 
		    
		 
		 
		 
		 
		 
		
		 
		$insert_query = "INSERT INTO `products` (`product_id`,`product_title`, `product_Description`, `brand_id`,
		                                          `product_keyword`, `Category_id`, `product_image1`,
												  `product_image2`,  `product_image3` , `product_price` , `date` , `status`) 
		                                         VALUES ('', '$product_title', '$product_Description', '$brand_id',
                                                 '$product_keyword', '$Category_id','$product_image1',
												 '$product_image2','$product_image3','$product_price', 'NOW()', '$product_status' )";
		 
		 
		 $result=mysqli_query($con,$insert_query);
		 
		 if($result)
			 
			 {
				 echo "<script>alert ('Inserted seccessfully')</script>";
				
                 
				 
			 }
			 else
			 {echo "<script>alert ('sorry')</script>";}
	 
	}
?>














<!doctype html>


<html>

<head>
<title> insert product </title>



<!--   bootstrap css link-->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" 
 integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2"
 crossorigin="anonymous">
 
 <!-- front awsome link -->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" 
 integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
 crossorigin="anonymous" 
 referrerpolicy="no-referrer" />

<link ref ="stylesheet" href ="style.css">


</head>



<body class="bg-light">

<div class="container mt-3" >


<h1 class = "text-center"> Insert Product</h1>


<!--form--->



<form action ="" method = "post" enctype="multipart/form-data" >


             <!-- product_title -->
<div class = "form-outline mb-4 w-50 m-auto">

<label for = "product_title" class="form-label"> Product title</label>
<input type = "text" name ="product_title" id ="product_title" class="form-control"
placeholder = "Enter product title" autocomplete = "off" required = "required">                                            








   
     
	
	   
	            
				
             </div>






<!-- product_Description-->
               
<div class = "form-outline mb-4 w-50 m-auto">

<label for = "product_Description" class="form-label"> Product Description</label>
<input type = "text" name ="product_Description" id ="product_Description" class="form-control"
placeholder = "Enter product Description" autocomplete = "off" required = "required"/>                                            


</div>









<!-- brand-->

<div class = "form-outline mb-4 w-50 m-auto">


<select name = "product_brands" id="" class="form-select">

           
		   
		   <option value=""> Select a brand</option>
		   
		   
		  
		
		   	<?php
		
		$sql = "SELECT * FROM brands";
$result = $con->query($sql);

if ($result->num_rows > 0) {
	
    while($row = $result->fetch_assoc()) {
		
		
		 $brand_title= $row["brand_title"];
		 $brand_id= $row["brand_id"];
		
        echo " <option value='$brand_id'> $brand_title </option>";
		
    }
} 



		
		
		?>
		   

</div>









            <!-- product_Keyword-->
               
<div class = "form-outline mb-4 w-50 m-auto">

<label for = "product_Keyword" class="form-label"> Product Keyword</label>
<input type = "text" name ="product_Keyword" id ="product_Keyword" class="form-control"
placeholder = "Enter product Keyword" autocomplete = "off" required = "required"/>                                            


</div>











          <!-- Category-->

<div class = "form-outline mb-4 w-50 m-auto">


<select name = "product_Category" id="" class="form-select">

           
		   
		   <option value=""> Select a Category</option>
		   
		   
		  
		
		   	<?php
		
		$sql = "SELECT * FROM categories";
$result = $con->query($sql);

if ($result->num_rows > 0) {
	
    while($row = $result->fetch_assoc()) {
		
		
		 $categorie_title= $row["category_title"];
		 $categorie_id= $row["category_id"];
		
        echo " <option value='$categorie_id'> $categorie_title </option>";
		
    }
} 



		
		
		?>		   
		    
		   

</div>











<!-- product_image1-->
               
<div class = "form-outline mb-4 w-50 m-auto">

<label for = "product_image1" class="form-label"> Product Keyword</label>
<input type = "file" name ="product_image1" id ="product_image1" class="form-control"
  required = "required"/>                                            

</div>




<!-- product_image2-->
               
<div class = "form-outline mb-4 w-50 m-auto">

<label for = "product_image2" class="form-label"> Product Keyword</label>
<input type = "file" name ="product_image2" id ="product_image1" class="form-control"
  required = "required"/>                                            

</div>






<!-- product_image3-->
               
<div class = "form-outline mb-4 w-50 m-auto">

<label for = "product_image3" class="form-label"> Product Keyword</label>
<input type = "file" name ="product_image3" id ="product_image3" class="form-control"
  required = "required"/>                                            

</div>






<!--price---->

<div class = "form-outline  w-50 m-auto">
<label for = "product_price" class ="form-label">Product Price</label>

<input type = "text" name ="product_price" 
id= "product_price" class="form-control" 
placeholder="Enter Product Price" required= "required">


















</div>

<div class = "form-outline  w-50 m-auto">
<input type ="submit" name ="insert_product" class="btn
btn-info mb-3 px-3" value ="insert_product">




</div>




   </form>
   
   </div>































<div class = "bg-info p-3 text-center">
 
 <p>All rights reserved ©- designed by Faisal Hossain -2022</p>
 
 </div>
 
 
 
 
 
 
 
 
 
</body>


</html>