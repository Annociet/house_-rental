<?php include 'header.php' ?>
<?php include 'connection.php' ?>
<?php
if(isset($_POST['register']))
{
   echo $lname =$_POST ["lname"];
    $lcontact = $_POST ["lcontact"];
    $lemail= $_POST ["lemail"];
    $lnin = $_POST ["lnin"];
    $lgender = $_POST ["lgender"];
    $lpassword = $_POST ["lpassword"];

  $querry= "INSERT INTO `landlord`(`lname`, `lcontact`, `lemail`, `lnin`, `lgender`, `lpassword`) 
  VALUES ('$lname','$lcontact','$lemail','$lnin','$lgender','$lpassword')";

	$sql = mysqli_query($conn,$querry);
	if($sql)
	{
   echo "registered successfully";
   header("location:landlord.php");
  }
 else
  {
    echo "registration failed".mysqli_error($querry);
  }	
}
?>
    
<section id="login" class="py-2">
    <div class="container  ">
       <div class="row">
           <div class="col-md-12">
               <div class="row">
                   <div class="col-md-6 mx-3">
    
                   <form action="" method="post">
                   <!-- <form autocomplete="off" id="registrationForm"> -->
                           <p class="text-center font-weight-bold " style="color:#fff">REGISTRATION FORM</p>
                          
                           <div class="form-group">
                           
                            <input type="text" class="form-control" name="lname" Placeholder="Enter your Name"id="exampleInputEmail1" aria-describedby="emailHelp">
                            
                          </div>

                          <div class="form-group">
                          
                            <input type="text" class="form-control"  name="lcontact"placeholder="Enter your contact">
                           
                          </div>

                           <div class="form-group">
                      
                             <input type="email" class="form-control"  name="lemail" placeholder="example@gmail.com">
                           
                           </div>
                           <div class="form-group">
                           
                            <input type="text" class="form-control"  name="lnin" placeholder="Enter your NIN number">
                          </div>
 
                           <div class="form-group">
                       
                             <input type="text" class="form-control" name="lgender" placeholder="Enter your gender">
                           </div>
                           
                           <div class="form-group">
                          
                            <input type="password" name="password"class="form-control" placeholder="Enter your password">
                          </div>
                           <div class="form-group form-check">
                               <div class="erow">
                                   <div class="col-md-12">
                                       <div class="row">
                                           <div class="col-md-8">
                                             <button type="submit" name ="register" class="btn btn-primary">Register now</button>
                                           </div>
                                           <div class="col-md-4">
                                             <a href="logini.php" id="login2" style="color:#fff">Login</a>
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


<!-- <script>
    $(Document).ready(function(){
        $('#login3').click(function(){
            
       $(".dynamicArea").load("logini.php");
        })


        // registrationForm
        $('#registrationForm').submit(function(e){

        e.preventDefault();

        $.ajax({
          url:"code/tenant.php",
          method:"POST",
          data:new FormData(this),
          contentType:false,
          processData:false,
          success:function(response)
          {
            // console.log(response);
            if(response==1)
            {
              $('#registrationForm')[0].reset();
            }
          },
          error:function()
          {
            console.log("Error in sending data")
          }

        })
       
    })
  });
</script> -->

