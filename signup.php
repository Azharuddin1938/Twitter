<?php 
 include 'core/init.php' ;
    
 if (isset($_SESSION['user_id'])) {
   header('location: home.php');
 }
?>

  
<html>
   

   <body>
   <!DOCTYPE html>
   <html lang="en">
   <head>
       <meta charset="UTF-8">
       <meta http-equiv="X-UA-Compatible" content="IE=edge">
       <meta name="viewport" content="width=device-width, initial-scale=1.0">
       <title>SignUp | Twitter</title>
       
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <link rel="preconnect" href="https://fonts.googleapis.com">
       <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      
       <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,300;1,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/2/master.css">
        <style>
.footer {
  position: fixed;
  left: 0;
  bottom: 0;
  width: 100%;
  background-color: red;
  color: white;
  text-align: center;
}

.form-footer{
    grid-column: 1/-1;
    grid-row: 2/-1;
    background: #edf3f7;
    padding-left: 100px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    margin-top: 2rem;
}
.form-footer p{
    font-size: 1.6rem;
    font-weight: 300;
    margin: 0.5rem 0;
}
.form-footer a:hover{
 text-decoration: underline;
}
</style>
   </head>
   <body>
       <script src="assets/js/jquery-3.4.1.slim.min.js"></script>

<!-- Nav code -->
<section class="sign-container">
   <nav class="nav-header-sign_up">
           <ul>
               <li>
                   <a href="#">
                  <i class=" fab fa-twitter"></i> 
                  Home
                   </a>
               </li>
               <li>
                   <a href="#">
                  About
                   </a>
               </li>
               <li>
                   <a href="#">
                  
                  Language:English
                   </a>
               </li>
           </ul>
       </nav>    <div class="form-container"> 
           <div class="form-content">
               <h2 class="header_form-content">
                   Create your account
               </h2>

<form action="./handle/handleSignUp.php" method="post">
<?php  if (isset($_SESSION['errors_signup'] )) { ?>
        <script>  
             $(document).ready(function(){
        // Open modal on page load
        $("#exampleModalCenter").modal('show');
 
       });
      </script>
                <?php foreach ($_SESSION['errors_signup'] as $error) { ?>
                       <div  class="alert alert-danger" role="alert">
                        <p style="font-size: 15px;" class="text-center"> <?php echo $error ; ?> </div>  <?php }  }
                        unset($_SESSION['errors_signup']) ?> </p>  
                    <!-- New Codes -->

                    
            <!--   <form  class="formField" action="handle/handleSignUp.php" method="POST"> -->
            <!--       <div class="form-group">
                                           <label for="firstName" >Name</label>
                       <input type="text" name ="name" id="name" autocomplete="off" required>
                       
                   </div>
                 <div class="form-group">
                                       <label for="lastName" >Username</label>
                       <input type="text" name ="username" id="username" autocomplete="off" required>
                   </div>
                   <div class="form-group">
                       <label for="email" >Email</label>
                       <input type="email" name ="email" id="email" autocomplete="off" required>
                   </div>
                   <div class="form-group">
                       <label for="password" >Password</label>
                       <input type="password" name ="password" id="password" autocomplete="off" required>
                   </div> -->
                <!--   <div class="form-group">
                       <label for="password" > Confirm Password</label>
                       <input type="password" name ="password2" id="password2" autocomplete="off" required>
                   </div> -->
              <!--     <div class="s-password">
                   <input type="checkbox"class ="form-checkbox"  id="s-password" onclick="showPassword()">   
                <label for="s-password">Show Password</label>
                   </div>
                   <div class="form-btn-wrapper">
                      
               <button type="submit" class="btn-form">Signup</button>
               <input type="checkbox"class ="form-checkbox" name ="remember" id="check">   
                <label for="remember"> Remember me</label>
           </div>
               </form>
              
           </div>
           <footer class="form-footer">
                   <p>Already have an account?
                   <a href="login.php"> Login now</a></p>
               </footer>
       </div>
   </section>
   <script src="assets/js/2/showPassword.js">
   <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/mine.js"></script>
   </script>
   </body>
   </html>                        
                  
                -->                       
                        
                        
                        
               <div class="form-group">
                       <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name">
                    </div>
                    <div class="form-group">
                       <input type="text" name="username" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Username">
                    </div>
                <div class="form-group">
                   
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Email">
                  
                </div>
                <div class="form-group">
                    
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div>
                <input type="checkbox"class ="form-checkbox"  id="s-password" onchange='passwordShow(this);'>   
                <label for="s-password">Show Password</label>
                   
                </div>
                <br/>
                  <div class="text-center">
                  <button type="submit" name="signup" class="btn-form"">Sign Up</button>
                  </div>
               
</form>

<footer class="form-footer">
                   <p>Already have an account?
                   <a href="login.php"> Login now</a></p>
               </footer>
                </div>       
   <script>
    function passwordShow(checkbox){
        //document.getElementById("exampleInputPassword1");
        if(checkbox.checked == true){
            document.getElementById("exampleInputPassword1").type="text";
    }else{
        document.getElementById("exampleInputPassword1").type="password";
   }
    }
    </script>
   <script src="assets/js/jquery-3.4.1.slim.min.js"></script>
        <script src="assets/js/popper.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
    <!--    <script src="assets/js/mine.js"></script> -->
   </script>
   </body>
   </html>