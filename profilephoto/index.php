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
                $sql = "UPDATE `register` SET `profile_url` = '$fullDestination' WHERE `id` = $id";
                $_SESSION['photo'] = $fullDestination;
                $result = mysqli_query($conn,$sql);
            }else{
                echo '<div style="z-index:2;position:absolute;width:100%;top:0;" class="alert alert-warning d-flex alert-dismissible align-items-center fade show" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                            <div> Error. File is Too big 
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                     </div>';
            }
        }else{
            echo '<div style="z-index:2;position:absolute;width:100%;top:0;" class="alert alert-warning d-flex alert-dismissible align-items-center fade show" role="alert">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                            </svg>
                            <div> Error. An Unknown  Error occured Please try Again
                            </div>
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
            }else{
        echo '<div style="z-index:2;position:absolute;width:100%;top:0;" class="alert alert-warning d-flex alert-dismissible align-items-center fade show" role="alert">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
                        <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
                        </svg>
                        <div> Error. File Not Supported. Try using a JPG or PNG file
                        </div>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>';
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css?version=1">
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