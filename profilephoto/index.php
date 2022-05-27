<?php
session_start();
include '../global/db.php';
if(isset($_POST['upload'])){
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];
    $fileExt = explode('.',$fileName);
    $fileActualExt = strtolower(end($fileExt));
    $allowed = array('jpg','jpeg','png');

    if(in_array($fileActualExt,$allowed)){
        if($fileError === 0){
            if($fileSize < 1000000){
                $id = $_SESSION['userid'];
                $fileNameNew = $fileName . "." . $fileActualExt;
                $fileDestination = 'images/' . $fileNameNew;
                $_SESSION['pastdedstination'] = $fileDestination;
                move_uploaded_file($fileTmpName,$fileDestination);
                $fullDestination = "profilephoto/" . $fileDestination;
                $sql = "UPDATE `register` SET `profile_url` = '$fullDestination' WHERE `id` = $id;";
                $_SESSION['photo'] = $fullDestination;
                $result = mysqli_query($conn,$sql);
            }else{
                echo 'File is too big';
            }
        }else{
            echo 'An Unknown  Error occured Please try Again';
        }
    }else{
        echo 'not supported';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload video</title>
    <link rel="stylesheet" href="style.css?version=3">
    <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
</head>
<body>
        <div class="upload">
        <lord-icon
            onclick="window.location.href = '../'"
            src="https://cdn.lordicon.com/iifryyua.json" 
            trigger="hover"
            style="width:35px;height:35px;transform: rotate(180deg);display: inline-block;position: absolute;left:0;top: 22px;"><!--to be changed-->
        </lord-icon>
            <h2>Profile Picture</h2>
            <p>Your profile picture will appear where your channel is presented on MyTube, like next to your videos and comments</p>
            <div class="profilephoto">
                <?php
                    if(isset($_SESSION['pastdedstination'])){
                        echo '<img class="profile-photo-picture" src="' . $_SESSION['pastdedstination'] . '" alt="Profile Photo">';
                    }else{
                        echo '<img class="profile-photo-picture" src="../global/dropdown/img/default-edit.jpg" alt="Profile Photo">';
                    }
                ?>
            </div>
            <div class="information">
            <p>It's recommended to use a picture that's at least 98 x 98
            pixels and 4MB or less. Use a PNG or GIF
            (no animations) file.</p>
            </div>
            <div class="controls">
                <form action="index.php" method="post" enctype="multipart/form-data">
                    <button onclick="detectFileChange()" class="uploadBtn">
                        <i>UPLOAD</i>
                        <input name="file" type="file" id="file">
                    </button>
                    <button name="upload" class="submit" type="submit" style="display: none;"></button>
                </form>
            </div>
        </div>
    <script src="../js/script.js"></script>
</body>
</html>