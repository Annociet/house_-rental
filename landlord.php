<?php include 'header.php' ?>

    
<section id="login" class="py-2">
    <div class="container  ">
       <div class="row">
           <div class="col-md-12">
               <div class="row">
                   <div class="col-md-6 mx-3">
    
                       <form autocomplete="off" id="loginForm">
                           <p class="text-center font-weight-bold " style="color:#fff">LAND LORD FORM</p>
                          
                           <div class="form-group">
                           
                            <input type="text" class="form-control" name="email" Placeholder="example@gmail.com" >
                            
                          </div>

                        
                        
                           <div class="form-group">
                          
                            <input type="password"name="password" class="form-control" placeholder="Enter your password">
                          </div>
                           <div class="form-group form-check">
                               <div class="erow">
                                   <div class="col-md-12">
                                       <div class="row">
                                           <div class="col-md-5">
                                             <button type="submit" name = "login" class="btn btn-primary">Login</button>
                                           </div>
                                           <div class="col-md-7">
                                             <a href="registrationForm.php" id="login2" " style="color:#fff" >Not Registered</a>
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

<!-- 
<script>
    $(Document).ready(function(){
        $('#login2').click(function(){
            
       $(".dynamicArea").load("registrationForm.php");
        })
         // registrationForm



         $('#loginForm').submit(function(e){

            e.preventDefault();

        $.ajax({
        url:"code/landlordlogini.php",
        method:"POST",
        data:new FormData(this),
        contentType:false,
        processData:false,
        success:function(response)
        {
            console.log(response);
            if(response==1)
            {
            //   $('#registrationForm')[0].reset();
            window.location="landlordHome.php";
            }
        },
        error:function()
        {
            console.log("Error in sending data")
        }

        })
    });

    })
</script> -->