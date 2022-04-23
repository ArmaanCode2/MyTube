<?php
session_start();
include '../db.php';//to be changed

if($_SERVER["REQUEST_METHOD"] == "POST"){
    if($_POST['g-recaptcha-response'] != ""){
        $username = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $cpass = $_POST['cpass'];
        $existSql = "SELECT * FROM `register` WHERE name = '$username'";//to be changed
        $result = mysqli_query($conn,$existSql);
        $numExistRows = mysqli_num_rows($result);
        if($numExistRows > 0){
            $_SESSION['error'] = "Username Already Exists";
            header('Location: ../signup/');//to be changed
        }else{
            $existSql = "SELECT * FROM `register` WHERE email = '$email'";//to be changed
            $result = mysqli_query($conn,$existSql);
            $numExistRows = mysqli_num_rows($result);
            if($numExistRows > 0){
                $_SESSION['error'] = "Email Already Exists";
                header('Location: ../signup/');//to be changed
            }else{
                if($pass === $cpass){
                    $hash  = password_hash($pass , PASSWORD_DEFAULT);
                    $sql ="INSERT INTO `register` (`name`, `email`,  `password`,`date`) VALUES ('$username', '$email', '$hash',current_timestamp())";//to be changed
                    $result = mysqli_query($conn,$sql);
                    header('Location: ../signup/');//to be changed
                    $_SESSION['success'] = "Your Free Account has been created You can now <a href='../login/' style='text-decoration:none;'>Login</a>";
                }else{
                    $_SESSION['error'] = "Please Check the Confirm Password is same as Password ";
                    header('Location: ../signup/');//to be changed
                }
            }
        }


    }else{
    $_SESSION['error'] = "Please Fill the reCaptcha for Verification";
    header('Location: ../signup/');//to be changed
    // echo $_SESSION['error'];
    }
}
?>