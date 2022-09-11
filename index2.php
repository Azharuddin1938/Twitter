<?php 
 
  
    include 'core/init.php' ;
    
    if (isset($_SESSION['user_id'])) {
      header('location: home.php');
    }
   
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Twitter</title>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;1,300;1,400&display=swap" rel="stylesheet">
     <link rel="stylesheet" href="assets/css/2/master.css">
</head>

<body>
<section class="main-page">
    <div class="left">
    <div class="left-content">
      <div>
      <i class="fa-solid fa-magnifying-glass"></i>
      <h3 class="left-content-heading">Find your interests</h3>
      </div>
      <div>
      <i class="fa-solid fa-user-group"></i>
      <h3 class="left-content-heading">Explore what people are talking about</h3>
      </div>
      <div>
      <i class="fa-solid fa-comment"></i>
      <h3 class="left-content-heading">Join the people</h3>
      </div>
    </div>
    </div>
    <div class="right">
     <div class="middle-content">
      <i class=" fab fa-twitter"></i>
     <h1>See what's happening in the world right now</h1>
     <h4>Join Twitter now</h4>
     <a href="signup.php" class="sign-up"> Sign Up</a>
     <a href="login.php" class="log-in"> Log In </a>
     
     </div>

    </div>
    <footer class="main-page-footer" role=" contentinfo">
     <ul>
      <li>
         <a href="#">About</a>
      </li>
      <li>
         <a href="#">Help Center</a>
      </li>
      <li>
         <a href="#">Terms of service</a>
      </li>
      <li>
         <a href="#">Privacy Policy</a>
      </li>
      <li>
         <a href="#">Cookle Policy</a>
      </li>
      <li>
         <a href="#">Ads info</a>
      </li>
      <li>
         <a href="#">Blog</a>
      </li>
      <li>
         <a href="#">Status</a>
      </li>
      <li>
         <a href="#">Career</a>
      </li>
      <li>
         <a href="#">Brand Resources</a>
      </li>
      <li>
         <a href="#">Advertising</a>
      </li>
      <li>
         <a href="#">Marketing</a>
      </li>
      <li>
         <a href="#">Twitter for Business</a>
      </li>
      <li>
         <a href="#">Developer</a>
      </li>
      <li>
         <a href="#">Directory</a>
      </li>
      <li>
         <a href="#">Settings</a>
      </li>
      <li>
         <a href="#">&copy;<?php echo date('Y'); ?>Twitter.Inc</a>
      </li>
      
     </ul>



    </footer>
 </section>
</body>
</html>