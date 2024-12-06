<?php
include("config.php");
session_start();

if (!isset($_SESSION['user_id'])) {
  header("Location: loginForm.php");
  exit();
}

$user_id = $_SESSION['user_id'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="style/style.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <title>Home Page</title>

  <style>
    .pic-container {
      background: url('img/bg.jpg') no-repeat center center fixed;
      background-size: cover;
      width: 100%;
      height: 100vh;
      display: flex;
      align-items: center;
    }

    body{
    background: rgb(143,139,217);
    background: linear-gradient(90deg, rgba(143,139,217,1) 2%, rgba(95,77,180,1) 35%, rgba(60,167,189,1) 84%);
    }

  </style>
</head>

<body>

  <?php
  include("section/navbar.php");
  ?>

  <?php
  include("section/about.php");
  ?>

  <?php
  include("section/review.php");
  ?>
  
 <?php
 include("section/item.php");
 ?>

<?php
include("section/faqs.php");
?>

<?php
include("section/footer.php");
?>


    

<!-- Logout Modal -->
<div class="modal fade almodal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Are you sure?</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure, do you want to logout this account?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <form action="logout.php" method="post">
                    <button type="submit" class="btn btn-danger" name="logout">Log out</button>
                </form>
            </div>
        </div>
    </div>
</div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>