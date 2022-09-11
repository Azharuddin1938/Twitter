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
    <title>Login on Twitter| Twitter</title>
    
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
    </nav>   
    <div class="form-container"> 
        <div class="form-content">
            <h2 class="header_form-content">
                Login To Twitter
            </h2>
            <form  class="formField" action="handle/handlelogin.php" method="POST">
                <div class="form-group">
                    <label for="username" >Username or Email</label>
                    <input type="text" name ="email" id="username" autocomplete="off" required>
                </div>
               
                
                <div class="form-group">
                    <label for="password" >Password</label>
                    <input type="password" name ="password" id="password" autocomplete="off" required>
                </div>
                <div class="s-password">
                <input type="checkbox"class ="form-checkbox"  id="s-password" onclick="showloginPassword()">   
             <label for="s-password">Show Password</label>
                </div>
                
                <div class="form-btn-wrapper">
                   
            <button type="submit" class="btn-form">Log In</button>
            <input type="checkbox"class ="form-checkbox" name ="remember" id="check">   
             <label for="remember"> Remember me</label>
        </div>
            </form>
           
        </div>
        <footer class="form-footer">
                <p>New to Twitter?
                <a href="signup.php">Sign Up to Twitter</a></p>
            </footer>
    </div>
</section>
<script src="assets/js/2/showPassword.js">
</script>
</body>
</html>
   