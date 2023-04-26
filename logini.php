<?php include 'header.php' ?>
<?php
// create connection
$servername = "localhost";
$username = "root";
$password = "";
$database = "house_rental_db";

$conn = mysqli_connect('localhost', 'root', '', 'house_rental_db');
if(!$conn)
{
	die("Conection failed because".mysqli_connect_error());
}
if(isset ($_POST['submit']))
{
    $temail = $_POST['temail'];
    $tpassword = $_POST['tpassword'];

    $sql = "select * from tenantt where temail = '$temail' and  tpassword ='$tpassword'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count =mysqli_num_rows($result);
    if($count==1)
    {
        header("location:profile.php");
    }
    else{
        echo '<script>
             window.location.href = "index.php";
             alert("login failed. invalid username or password")
       </script>';
    }       
}

?>
    
<section id="login" class="py-2">
    <div class="container  ">
       <div class="row">
           <div class="col-md-12">
               <div class="row">
                   <div class="col-md-6 mx-3">
    
                       <!-- <form autocomplete="off" id="loginForm"> -->
                        <form action="logini.php" method="post">
                           <p class="text-center font-weight-bold " style="color:#fff">LOGIN FORM</p>
                          
                           <div class="form-group">
                           
                            <input type="text" class="form-control " name="temail" Placeholder="example@gmail.com" >
                            
                          </div>

                        
                        
                           <div class="form-group">
                          
                            <input type="password" name="tpassword" class="form-control" placeholder="Enter your password">
                          </div>
                           <div class="form-group form-check">
                               <div class="erow">
                                   <div class="col-md-12">
                                       <div class="row">
                                           <div class="col-md-5">
                                             <button type="submit" name="submit" id="loginBtn" class="btn btn-primary">Login</button>
                                           </div>
                                           <div class="col-md-7">
                                             <a href="registrationForm.php" id="login2" style="color:#fff">Not Registered</a>
                                           </div>
                                       </div>
                                   </div>
                               </div>
  
                           </div>
                    
                          
                           
                        </form>
                   </div>
               </div>
           </div>
       </div>
        </div>
</section>

