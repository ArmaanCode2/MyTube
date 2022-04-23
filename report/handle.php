<?php
include '../global/db.php';
session_start();

  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
      $email = $_POST["email"];
      $rep = $_POST["report"];

      if($email != "" && $rep != ""){
        $sql = "INSERT INTO `report` (`email`, `report`) VALUES ('$email', '$rep')";
        $result = mysqli_query($conn,$sql);
        $_SESSION['success'] = "Your report has been submitted. We look Forward to Review Your problem";
        header("Location: ../report/");
      }else{
        $_SESSION['error'] = "Please fill he given Fields to Submit a report";
        header("Location: ../report/");
      }
  }
  ?>