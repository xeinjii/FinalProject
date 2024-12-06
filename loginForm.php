<?php
session_start();
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href=	"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style/style.css">
    <title>Login</title>
</head>
<body>
    
<nav class="navbar navbar-expand-lg bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand text-white" href="#">INFORMATION SYSTEM</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active text-white cc" aria-current="page" href="loginForm.php">Login</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-white cc" href="signupForm.php">Signup</a>
          </li>
        </li>
      </ul>
    </div>
  </nav>
  
<div class="wrapper">
         <div class="title">
            Login Form
         </div>
         <form action="login.php" method="post">
         <?php
          if (isset($_SESSION['status'])): 
         ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>Alert:</strong> 
        <?php echo htmlspecialchars($_SESSION['status']);?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
   
    unset($_SESSION['status']);
endif;
?>
            <div class="field">
               <input type="text" id="Email" name="Email" required>
               <label>Email Address</label>
            </div>
            <div class="field">
               <input type="password" id="Password" name="Password" required>
               <label>Password</label>
            </div>
            <div class="content">
               <div class="pass-link">
                  <a href="#">Forgot password?</a>
               </div>
            </div>
            <div class="field">
               <input type="submit" name="submit" value="Login">
            </div>
            <div class="signup-link">
               Don't have an account? <a href="signupForm.php">Signup now</a>
            </div>
         </form>
      </div>



      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>