
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User profile</title>

     <!-- customCSSS------ -->
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/mdb.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./font-awesome-4.7.0/css/font-awesome.css">
    <!-- customCSSS------ -->
</head>
</head>
<body class="">
<div class="card padding 50px p-1 mx-5" style="width: 18rem;">
  <img src="images/house13.jpg" class="card-img-top p-2" alt="...">
  <div class="card-body">
    <h5 class="card-title font-weight-bold">Our Dear Tenant</h5>
    <p class="card-text">Welcome to your profile <br>Thanks for loging into our system <br>This page is still under construction</p>
    <a href="index.php" class="btn btn-primary">Home</a>
  </div>
</div>
    <div class="justify-content-center">
        <?php
            $i = 1;
            include('db_connect.php');
                $tenant = $conn->query("SELECT `tid`, `tname`, `tcontact`, `temail`, `tnin`, `tgender` FROM `tenantt`");
            while($row=$tenant->fetch_assoc()):
            ?>
        
        <?php endwhile; ?>
    </div>        
</body>
</html>