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
<?php include('db_connect.php');?>
</head>
<style>
	body{
        background: #white;
  }
</style>
<body>
	<?php include 'topbar.php' ?>
	<?php include 'navbar.php' ?>


  
  <main id="view-panel" >
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-6">
				
			<?php
	
	 $id=$_GET['id'];
	$sql="SELECT * FROM `houses` where id='$id'";
	$query=mysqli_query($conn,$sql);
	$rows=mysqli_fetch_array($query);
	?>
    <form method="POST" enctype="multipart/form-data" action="edit.php">
				<div class="card">
					<div class="card-header">
						    House Form
				  	</div>
					<input type="hidden" name="edit_id" value="<?php echo $rows['id'];?>">
					<div class="card-body">
							<div class="form-group" id="msg"></div>
							<input type="hidden" name="id">
							<div class="form-group">
								<label class="control-label">House No</label>
								<input type="text" class="form-control bg-light" name="house_no"  value="<?php echo $rows['house_no'];?>">
							</div>
							<!-- category__section -->
							 <div class="form-group">
								<label class="control-label">Category</label>
								<select name="category_id" id="" class="custom-select" >
									<option value="">Select category</option>
									<?php 
									$categories = $conn->query("SELECT * FROM categories order by name asc");
									if($categories->num_rows > 0):
									while($row= $categories->fetch_assoc()) :
									?>
									<option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>
								<?php endwhile; ?>
								<?php else: ?>
									<option selected="" value="" disabled="">Please check the category list.</option>
								<?php endif; ?>
								</select>
							</div>
							<!-- category__section -->

							<!-- Description__section -->

								 <div class="form-group">
									<label for="" class="control-label">Description</label>
									<textarea name="description" id="" cols="30" rows="4" class="form-control bg-light" required
									>
									<?php echo $rows['description'];?>
								</textarea>
							
								</div>
							
							<!-- Description__section -->

							
							<!-- Price__section -->
							<div class="form-group">
								<label class="control-label">Price</label>
								<input type="number" class="form-control bg-light text-right" value="<?php echo $rows['price'];?>" name="price" step="any" required="">
							</div> 
							<!-- Price__section -->


							
							<!-- image__section -->
							<div class="upload photo">
								<div class="label">
									<input type="file" name = "image">
									<!-- <input type="submit" name = "submit" value ="upload"> -->
								</div>
							</div>
							<!-- image__section -->
					</div>
					<div class="card-footer">
						<div class="row">
							<div class="col-md-12">
								<button class="btn btn-sm btn-primary col-sm-5 offset-md-3" name="submit" type="submit"> Save</button>
								<button class="btn btn-sm btn-default col-sm-5" type="reset" > Cancel</button>
							</div>
						</div>
					</div>
				</div>
			</form>
 
		</main>
		</div>
		</div>
	</div>


	</body>
	
</html>