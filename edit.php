<?php
// create connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "house_rental_db";

$conn = mysqli_connect('localhost', 'root', '', 'house_rental_db');

      
		 $house_no=$_POST['house_no'];
	     $category_id=$_POST['category_id'];
	     $description=$_POST['description'];
	     $price=$_POST['price'];
         $id=$_POST['edit_id'];
        //  images
        
if(!empty($_FILES['image']['name']))
        {
            $upload_dir='uploads/';
            $file=$_FILES['image']['name'];
            $tmp=$_FILES['image']['tmp_name'];
           
                $sql="UPDATE `houses` SET `image` = '$file' WHERE `houses`.`id` ='$id'";
                $query=mysqli_query($conn,$sql);
              
                move_uploaded_file($tmp,$upload_dir.$file);
       
        }
	    $sql="UPDATE `houses` SET `house_no` = '$house_no', `category_id` = '$category_id',
        `description` = '$description',`price` = '$price' WHERE id =$id";
		$query=mysqli_query($conn,$sql);
        if($query)
        {
          header('location:indexi.php?page=houses');
        }else{
           echo "failed";
        }
		
	
?>