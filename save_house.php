<?php
// create connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "house_rental_db";

$conn = mysqli_connect('localhost', 'root', '', 'house_rental_db');

        $upload_dir='uploads/';
		 $house_no=$_POST['house_no'];
	     $category_id=$_POST['category_id'];
	     $description=$_POST['description'];
	     $price=$_POST['price'];
        //  images
	     $file=$_FILES['image']['name'];
	     $tmp=$_FILES['image']['tmp_name'];
    
		
	$sql="INSERT INTO `houses` (`id`, `house_no`, `category_id`, `description`, `image`, `price`)
     VALUES (NULL, '$house_no', '$category_id','$description','$file', '$price')";
		move_uploaded_file($tmp,$upload_dir.$file);
		$query=mysqli_query($conn,$sql);
        if($query)
        {
          header('location:indexi.php?page=houses');
        }else{
           echo "failed";
        }
		
	
?>