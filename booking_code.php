<?php
// create connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "house_rental_db";

$conn = mysqli_connect('localhost', 'root', '', 'house_rental_db');
if(isset($_POST['book']))
{
 $category_id=$_POST['category_id'];
 $house_no=$_POST['house_no'];
 $name=$_POST['tname'];
 $contact=$_POST['tcontact'];
 $nin=$_POST['tnin'];
 $email=$_POST['temail'];
 $sql="INSERT INTO `booking` (`bid`, `house_no`, `category_id`, `tname`, `tcontact`, `temail`, `tnin`) 
        VALUES (NULL, '$house_no', '$category_id', '$name', '$contact', '$email', '$nin')";
 $query=mysqli_query($conn,$sql);
 if($query)
        {
          header('location:index.php');
       
        }else{
           echo "failed";
        }
		
}
?>