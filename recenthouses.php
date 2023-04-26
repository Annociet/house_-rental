    <!-- customCSSS------ -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/mdb.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./js/bootstrap.min.js">
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.css">
    <!-- customCSSS------ -->
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

                <div class="container-fluid">
                    <a class="navbar-brand font-weight-bold" href="#"><i class="fa fa-home fa-2x  estate-color-2"></i>MY <span class="estate-color-2"> HOME</span> </a>
                    <button class="navbar-toggler d-lg-none" type="button" data-toggle="collapse" data-target="#collapsibleNavId" aria-controls="collapsibleNavId"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavId">
                        <ul class="navbar-nav font-weight-bold mx-auto mt-2 mt-lg-0">
                            <li class="nav-item ">
                                <a class="nav-link active " data-link="index.php" href="index.php"><i class="fa fa-home  mx-1 "></i>Home</a>
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
                                <a class="nav-link" href="recenthouses.php"></i>Booking</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link"  data-link="datalink.php" href="recenthouses.php"></i> Recent Houses</a>
                            </li>
                        
                    
                    </div>
                </div>
            
            </nav>
    <!-- ---------------------navigation-bar--------------- -->


    <!-- ====================FEATURE============================= -->

    <section id="feature" class="py-5">    
            <p class="text-center font-weight-bold lead estate-color-2" style="font-size: 2rem;">Available house rentals</p>   
        
        <div class="line2"></div>
        <div class="container py-3">
            <div class="row">


            <?php
            $i = 1;
            include('db_connect.php');
            $house = $conn->query("SELECT h.*,c.name as cname FROM houses h inner join categories c on c.id = h.category_id order by id desc");
			while($row=$house->fetch_assoc()):
			?>
                <!-- house-one -->
                        <div class="col-md-4">
                                <!-- card-container -->
                                    <div class="card-container">
                                     
                                                <!-- image_1 -->
                                                        <div class="carousel-item active">
                                                            
                                                            <img src="uploads/<?php echo $row['image'];?>" class="d-block w-100" alt="...">
                                                        </div>
                                            <!-- image_1 -->

                                            
                                             
                    
                            
                                        <div class="content">
                                            <div class="product product-name  text-left"><?php echo $row['cname'] ?></div>
                                        
                                            
                                        
                                            <div class="product-description">
                                                <div class="product product-price">UGX :
                                                    <?php echo number_format($row['price'],2) ?>
                                                </div>
                                                <div class="location"><i class="fa fa-location-arrow mx-2"></i>
                                                <?php echo $row['description'] ?>
                                            </div>
                                            </div>
                                    
                                            <div class="buttons">
                                           
                                            <a href="booking.php?id=<?php echo $row['id'];  ?>">
                                                <button class=" button add-cart">
                                                <i class="fa fa-shopping-bag mx-2"></i>
                                                   BOOK
                                            </button>
                                             </a>
                                                
                                                <button class="button remove"><i class="fa fa-eye mx-2">

                                                </i>DETAILS</button>
                                
                                            </div>
                                        </div>
                                        <div class="sale-area text-center ">
                                        <!-- <p class="mt-2 font-weight-bold">FOR SALE</p> -->
                                    </div>
                                        
                                    </div>
                                <!-- card-container -->
                            </div>
                    <!-- house-one -->
            <?php endwhile; ?>
               

           


<!-- ====================FEATURE============================= -->