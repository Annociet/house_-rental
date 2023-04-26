<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
include('./db_connect.php');
ob_start();
if(!isset($_SESSION['system'])){
	$system = $conn->query("SELECT * FROM system_settings limit 1")->fetch_array();
	foreach($system as $k => $v){
		$_SESSION['system'][$k] = $v;
	}
}
ob_end_flush();
?>
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?php echo $_SESSION['system']['name'] ?></title>
 	

<?php include('./header.php'); ?>
<?php 
if(isset($_SESSION['login_id']))
header("location:indexi.php?page=home");

?>

</head>
<style>
	
#main{
background:url('images/house13.jpg');
height: 100vh;
width: 100vw;
position:relative;
background-size: cover;
background-position: center;
background-repeat: no-repeat;
}
.form{
	
}
</style>

<body>
   <!-- ---------------------navigation-bar--------------- -->
   <nav class="navbar navbar-expand-md navbar-light  estate-bg-color-2 py-2 sticky-top">
                <div class="container-fluid">
                    <a class="navbar-brand font-weight-bold" href="index.php"><i class="fa fa-home fa-2x  estate-color-2"></i>MY <span class="estate-color-2"> HOME</span> </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    
                    </button>

                   
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav font-weight-bold ml-auto mt-2 mt-lg-0">
                            <li class="nav-item ">
                                <a class="nav-link active" data-link="index.php" href="index.php"><i class="fa fa-home  ml-1 "></i>Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-link="contact.php" href="contact.php"></i> Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-link="testimonal.php" href="testimonal.php"></i> Testimonals</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-link="login.php" href="login.php"></i>Admin_Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-link="booking.php" href="recenthouses.php"></i>Booking</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  data-link="datalink.php" href="recenthouses.php"></i> Recent Houses</a>
                            </li>
                        
                    
                    </div>
                </div>
            
            </nav>
    <!-- ---------------------navigation-bar--------------- -->

 <center>

  <main id="main" class=" bg-light">
  	
  <div class="container py-5">
	<div class="row justify-content-center py-5 ">
		<div class="col-md-10 ">

			<div class="form">
				
				<h4 class="text-white text-center fw-bold  "><b><?php echo $_SESSION['system']['name'] ?></b></h4>
				<br>
				<br>
				  <div class="card col-md-8">
					  <div class="card-body text-left">
						  <form id="login-form" >
							  <div class="form-group">
								  <label for="username" class="control-label">Username</label>
								  <input type="text" id="username" name="username" class="form-control bg-light" placeholder="Enter your username">
							  </div>
							  <div class="form-group">
								  <label for="password" class="control-label">Password</label>
								  <input type="password" id="password" name="password" class="form-control bg-light" placeholder="Enter your password">
							  </div>
							  <center><button class="btn-sm btn-block btn-wave col-md-4 btn-primary">Login</button></center>
						  </form>
					  </div>
				  </div>
			  
			</div>
		</div>
	</div>
  </div>
   

  </main>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>
</center>

</body>
<script>
	$('#login-form').submit(function(e){
		e.preventDefault()
		$('#login-form button[type="button"]').attr('disabled',true).html('Logging in...');
		if($(this).find('.alert-danger').length > 0 )
			$(this).find('.alert-danger').remove();
		$.ajax({
			url:'ajax.php?action=login',
			method:'POST',
			data:$(this).serialize(),
			error:err=>{
				console.log(err)
		$('#login-form button[type="button"]').removeAttr('disabled').html('Login');

			},
			success:function(resp){
				if(resp == 1){
					location.href ='indexi.php?page=home';
				}else{
					$('#login-form').prepend('<div class="alert alert-danger">Username or password is incorrect.</div>')
					$('#login-form button[type="button"]').removeAttr('disabled').html('Login');
				}
			}
		})
	})
</script>	
</html>