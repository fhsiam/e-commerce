<?php

/*include'connect.php';*/
include ('./connect.php');

     if(isset ($_POST['insert_cat']))
		 
	 {
		 $category_title=$_POST['cat_title'];
		 
		 
		 
		 
		 
		 
		
		 
		$insert_query = "INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES ('', '$category_title')";
		 
		 
		 $result=mysqli_query($con,$insert_query);
		 
		 if($result)
			 
			 {
				 echo "<script>alert ('Category has been inserted seccessfully')</script>";
				 
			 }
			 else
			 {echo "<script>alert ('sorry')</script>";}
	 
	}


?>

<center>
<h1>Insert Brand<h1>
</center>


<form action ="" method ="post" class= "mb-2">

<div class = "input-group w-90 mb-2">


<span class ="input-group-text bg-info" id="basic addon1"><i class="fa-solid fa-receipt"></i></span>



<input type ="text" class = "form-control" name = "cat_title" placeholder="Insert Brand" aria-lable="categories" 
aria-describeby="besic-addon1">   


</div>

<div class ="input-group w-10 mb-2 m-auto" >




<input type="submit" class ="bg-info border-0 p-2 my-3" name = "insert_cat" value = "Insert Brand">



</div>


</form> 

