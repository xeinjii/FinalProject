
<?php
    session_start();
    include("config.php");
    if(isset($_POST['submit'])){
        $Fullname = mysqli_real_escape_string($conn, $_POST['Fullname']);
        $Email = mysqli_real_escape_string($conn, $_POST['Email']);
        $Password = mysqli_real_escape_string($conn, $_POST['Password']);
        $Cpassword = mysqli_real_escape_string($conn, $_POST['Cpassword']);
      

        $sql="select * from useraccount where Fullname='$Fullname'";
        $result = mysqli_query($conn, $sql);
        $count_Fullname = mysqli_num_rows($result);
        
        $sql="select * from useraccount where Email='$Email'";
        $result = mysqli_query($conn, $sql);
        $count_Email = mysqli_num_rows($result);

        if($count_Email == 0 & $count_Fullname==0){
            if($Password==$Cpassword){
                $hash = password_hash($Password, PASSWORD_DEFAULT);
                $sql = "INSERT INTO useraccount(Fullname, Email, Password) VALUES('$Fullname','$Email', '$hash')";
                $result = mysqli_query($conn, $sql);
                if($result){
                    header("Location: loginForm.php");
                }
            }
            else{       
              $_SESSION['status'] = "Password do not match!!";
              header("location: signupForm.php");
            }
        }
        else{
            if($count_Fullname>0){
                $_SESSION['status'] = "Fullname already exist!!";
                header("location: signupForm.php");
            }
            if($count_Email>0){
                $_SESSION['status'] = "Email already exist";
                header("location: signupForm.php");
            }
        }
        
    }
?>
