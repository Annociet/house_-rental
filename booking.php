<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>booking</title>
    <!-- customCSSS------ -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/mdb.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.css">
    <!-- customCSSS------ -->
    
</head>
<body>

    <?php include('db_connect.php');?>
<?php
 $id=$_GET['id'];
 $sql="select houses.id,houses.house_no,houses.description,houses.price,houses.image, categories.name from
 houses inner join  categories on  houses.category_id =categories.id where  houses.id ='$id';
 "; 
 $query=mysqli_query($conn,$sql);
 $rows=mysqli_fetch_array($query);
?>


   <!-- ---------------------header-section--------------- -->
   <div class="header-information py-3 text-center">
       <div class="container">
           <div class="row">
               <div class="col-md-3">
                   <a href="#" class="estate-color"><i class="fa fa-phone mx-2"></i>+256775826834</a>
               </div>
               <div class="col-md-9">
                   <div class="row">
                     
                       <!-------- email-address------ -->
                        <div class="col-md-4 email">
                          | <a classs="text-light"><i class="fa fa-envelope mx-2"></i>infohouse23@gmail.com</a>
                        </div>
                        <!-------- email-address------ -->
                       <!-------- social-icons------ -->
                        <div class="col-md-4 social-iconz">
                          | <a class="text-light"><i style="font-size:1.4rem"  class="fa fa-facebook text-primary fa-1x mx-2"></i></a>
                           <a class="text-light"><i style="color:skyblue;font-size:1.4rem" class="fa fa-twitter  fa-1x mx-2"></i></a>
                           <a class="text-light"><i style="font-size:1.4rem" class="fa fa-youtube fa-1x mx-2"></i></a>
                           <a class="text-light"><i style="font-size:1.4rem"  class="fa fa-linkedin fa-1x mx-2"></i></a>
                        </div>
                        <!-------- social-icons------ -->
                      
                     
                   
                       
                   </div>
               </div>
           </div>
       </div>
   </div>
   <!-- ---------------------header-section--------------- -->

    <!-- ---------------------navigation-bar--------------- -->
            <nav class="navbar navbar-expand-md navbar-light  estate-bg-color-2 py-2">
                <div class="container">
                    <a class="navbar-brand font-weight-bold" href="#"><i class="fa fa-home fa-2x  estate-color-2"></i>MY <span class="estate-color-2"> HOME</span> </a>
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"

                         aria-expanded="false" aria-label="Toggle navigation"> 
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav font-weight-bold mx-auto mt-2 mt-lg-0">
                            <li class="nav-item ">
                                <a class="nav-link active " data-link="home.php" href="homei.php">></i>Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-link="contact.php" href="contact.php"></i> Contact</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-link="testimonal.php" href="testmonal.php"></i> Testimonals</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-link="login.php" href="login.php"></i>Admin_Login</a>
                            </li>
                            <li class="nav-item">
                            <a class="nav-link" href="recenthouses.php"></i>Booking</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  data-link="datalink.php" href="#"></i> Recent Houses</a>
                            </li>
                        
                    
                    </div>
                </div>
            
            </nav>
    <!-- ---------------------navigation-bar--------------- -->
<!-- booking__container -->
<div class="container py-5">
    <div class="row  justify-content-center align-items-center">
        <div class="col-md-8">
    

        <!-- card__container -->
        <div class="card mb-3" style="max-width:50rem;">
            <div class="row">
                <div class="col-md-6">
                      <img src="uploads/<?php echo $rows['image'];?>" class="img-fluid  rounded-start " style="height:10rem; width:40rem;" alt="...">
                      <div class="px-3 py-2">

                          <h5 class="fw-bold text-center "><?php echo strtoupper($rows['name']);?></h5>
                          <p> House_no: <?php echo $rows['house_no'];?></p>
                        
                          <p> Price:ugx <?php echo $rows['price'];?></p>
                          <p> Description:<?php echo $rows['description'];?></p>
                      </div>
                    </div>
                <div class="col-md-6">
                <div class="card-body">
                    <h5 class="card-title fw-bold">TENANT REGISTRATION FORM</h5>
                    
                    <!-- <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p> -->
                    <!-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> -->
                    <form action="booking_code.php" method="POST">
                    
                        <!-- category_id -->
                        <input type="hidden" name="house_no" value=" <?php echo $rows['house_no'];?>">
                        <!-- house_no -->
                        <input type="hidden" name="category_id" value=" <?php echo $rows['name'];?>">

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">tenant name</label>
                            <input type="text" class="form-control bg-light" name="tname" id="name" aria-describedby="emailHelp">
                           
                        </div>

                        <div class="mb-3">
                            <label for="contact" class="form-label">contact</label>
                            <input type="text" name="tcontact" class="form-control bg-light" id="contact">
                           
                        </div>


                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" name="temail" class="form-control bg-light" aria-describedby="email" placeholder="example@gmail.com">
                           
                        </div>

                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">nin</label>
                            <input type="text" class="form-control bg-light" name="tnin">
                           
                        </div>
                      
                        
                        <button type="submit" name="book" class="btn btn-primary">book</button>
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

</body>