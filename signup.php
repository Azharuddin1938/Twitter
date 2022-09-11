<?php
  include 'core/init.php' ;

  if (isset($_SESSION['user_id'])) {
    header('location: home.php');
  }
/*
  function formSanitizer($input){
    $input=trim(strip_tags($input));
    $input=htmlspecialchars($input);
    return $input;
  }
  if(is_post_request()){
   if(isset($_POST['firstName'])&& !empty($_POST['firstName'])){
     $fname=FormSanitizer::formSanitizerName($_POST['firstName']);
     $lname=FormSanitizer::formSanitizerName($_POST['lastName']);
     $email=FormSanitizer::formSanitizerString($_POST['email']);
     $pass=FormSanitizer::formSanitizerString($_POST['password']);
     $pass2=FormSanitizer::formSanitizerString($_POST['password2']);
     $username=$account->generateUsername($fname,$lname);
  
     echo  $username;
 
    $account->register($fname,$lname,$username,$email, $pass,$pass2);
   }
  }
  */

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
   </head>
   
   <body><section class="sign-container">
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
               <form  class="formField" action="handle/handleSignUp.php" method="POST">
                   <div class="form-group">
                                           <label for="firstName" >Name</label>
                       <input type="text" name ="name" id="firstName" autocomplete="off" required>
                   </div>
                 <div class="form-group">
                                       <label for="lastName" >Username</label>
                       <input type="text" name ="username" id="lastName" autocomplete="off" required>
                   </div>
                   <div class="form-group">
                       <label for="email" >Email</label>
                       <input type="email" name ="email" id="email" autocomplete="off" required>
                   </div>
                   <div class="form-group">
                       <label for="password" >Password</label>
                       <input type="password" name ="password" id="password" autocomplete="off" required>
                   </div>
                <!--   <div class="form-group">
                       <label for="password" > Confirm Password</label>
                       <input type="password" name ="password2" id="password2" autocomplete="off" required>
                   </div> -->
                   <div class="s-password">
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
   
   </script>
   </body>
   </html