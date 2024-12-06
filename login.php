<?php
session_start();
include("config.php");

if (isset($_POST['submit'])) {
    // Sanitize user input
    $Email = mysqli_real_escape_string($conn, $_POST['Email']);
    $Password = mysqli_real_escape_string($conn, $_POST['Password']);

    // Query to check if the email exists
    $sql = "SELECT * FROM useraccount WHERE Email = '$Email'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

        // Verify the password
        if (password_verify($Password, $user['Password'])) {
            // Start session and store user data
            $_SESSION['user_id'] = $user['id'];
            header("Location: index.php");
            exit();
        } else {  
            $_SESSION['status'] = "Incorrect password!";
            header("Location: loginForm.php");
            exit();
        }
    } else {
        $_SESSION['status'] = "Email does not exist!";
        header("Location: loginForm.php");
        exit();
    }
}
?>
