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

if(isset($_POST['insert']))
{

   echo $tname =$_POST ["tname"];
    $tcontact = $_POST ["tcontact"];
    $temail= $_POST ["temail"];
    $tnin = $_POST ["tnin"];
    $toccupation = $_POST ["toccupation"];
    $tgender = $_POST ["tgender"];
    $tpassword = $_POST ["tpassword"];

  $querry= "INSERT INTO `tenantt`( `tname`, `tcontact`, `temail`, `tnin`, `toccupation`, `tgender`, `tpassword`) 
  VALUES ('$tname', '$tcontact','$temail','$tnin','$toccupation','$tgender','$tpassword')";
	$sql = mysqli_query($conn,$querry);
	if($sql)
	{
   echo "registered successfully";
  //  header("location:tenant.php");
  }
 else
  {
    echo "registration failed".mysqli_error($querry);
    // header("location:tenant.php");
  }	
  // <script>
  //  alert('registered successfully');
  // </script>
}
 
?>
    
<section id="login" class="py-2">
    <div class="container  ">
       <div class="row">
           <div class="col-md-12">
               <div class="row">
                   <div class="col-md-6 mx-3">
                
                      <form action="" method="POST" name ="myform" onsubmit = "return validateform()">
                           <p class="text-center font-weight-bold " style="color:#fff">TENANT REGISTRATION FORM</p>

                           <div class="form-group">
                           
                           
                           <input type="text"class="form-control" name="tname" Placeholder="tenants Name"id="exampleInputEmail1" aria-describedby="emailHelp" required>
                           
                            </div>
                        
                         <div class="form-group">
                         
                           <input type="text" class="form-control"  name="tcontact"placeholder="Provide your contact" required>
                          
                         </div>


                          <div class="form-group">
                     
                            <input type="email" class="form-control"  name="temail" placeholder="example@gmail.com" required>
                          
                          </div>
                          <div class="form-group">
                          
                           <input type="text" class="form-control"  name="tnin" placeholder="Enter your nin number" required>
                         </div>
                         <div class="form-group">

                           <input type="text" class="form-control"  name="toccupation" placeholder="Enter your occupation">
                         </div>

                          <div class="form-group">
                      
                            <input type="text" class="form-control" name="tgender" placeholder="Enter your gender">
                          </div>
                          <div class="form-group">
                         
                           <input type="password" name="tpassword"class="form-control" placeholder="Enter your password" required>
                         </div>
                          <div class="form-group form-check">
                              <div class="erow">
                                  <div class="col-md-12">
                                      <div class="row">
                                          <div class="col-md-8">
                                            <button type="submit" name = "insert" class="btn btn-primary">submit</button>
                                          </div>
                                          <div class="col-md-4">
                                            <a href="logini.php" id="login" style="color:#fff">Login</a>
                                          </div>
                                      </div>
                                  </div>
                              </div>
 
                              </div>

  
                           </div>
                    
                          
                           
                        </form>
                   </div>
                   <script>
                   function validateform()
                   {
                    var tname document.forms['myform'] ['tname'].value
                   }
                   if (tname = "")
                   {
                    alert('registered successfully');
                    return false;
                   }
                   </script>
               </div>
           </div>
       </div>
        </div>
</section>
 

