<!DOCTYPE html>
<html lang="en">
	
<?php session_start(); ?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo isset($_SESSION['system']['name']) ? $_SESSION['system']['name'] : '' ?></title>
 	

<?php
  if(!isset($_SESSION['login_id']))
    header('location:login.php');
 include('./header.php'); 
 // include('./auth.php'); 
 ?>

</head>


<body>
	<?php include 'topbar.php' ?>
	<?php include 'navbar.php' ?>
  <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-body text-white">
    </div>
  </div>
  <?php
  include 'db_connect.php';
  ?>
  <main id="view-panel" >
   
  	
<!-- booking__container -->
<div class="container py-5">
    <div class="row  justify-content-center align-items-center">
        <div class="col-md-8">
    
<?php
$id=$_GET['id'];
$sql="SELECT * FROM `booking` where bid=$id";
$query=mysqli_query($conn,$sql);
$rows=mysqli_fetch_array($query);

?>
        <!-- card__container -->
        <div class="card mb-3 p-4" style="max-width:50rem;">
            <div class="row">
                <div class="col-md-12">
                <form >
                    <h5>TENANT BOOKING INFORMATION</h5>
                    <div class="mb-3 mt-3">
                        <label for="house_no" class="form-label">house_no:</label>
                        <input type="text" class="form-control bg-light" id="email" placeholder="Enter email" " value="<?php echo $rows['house_no'];?>" readonly>
                    </div>
                    <div class="mb-3 mt-3">

                   
                    <div class="mb-3 mt-3">
                        <label for="tname" class="form-label">category_id:</label>
                        <input type="text" class="form-control bg-light" id="email" placeholder="Enter email" name="email"value="<?php echo $rows['category_id'];?>" readonly >
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="tcontact" class="form-label">tenants name:</label>
                        <input type="email" class="form-control bg-light" id="email" placeholder="Enter email" name="email" value="<?php echo $rows['tname'];?>" readonly>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">Contact:</label>
                        <input type="email" class="form-control bg-light" id="email" placeholder="Enter email" name="email" value="<?php echo $rows['tcontact'];?>" readonly>
                    </div>
                    <div class="mb-3 mt-3">
                        <label for="email" class="form-label">nin:</label>
                    </div>
                        <input type="email" class="form-control bg-light" id="email" placeholder="Enter email" name="email" value="<?php echo $rows['tnin'];?>" readonly>
                    
                    <div class="mb-3 mt-3">

                    <a href ="indexi.php">back to home</a>

                
                    </form>
                </div>
                </div>
            </div>
</div>
        <!-- card__container -->
        </div>
    </div>
    
</div>
<!-- booking__container -->
  </main>



</body>
	
</html>