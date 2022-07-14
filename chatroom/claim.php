<?php
$room = $_POST['room'];
if(strlen($room) > 20 or strlen($room) <  2){
    $message = "plz choose 2 to 20 charachters";
    echo "<script>
    alert('$message');
    window.location='http://localhost/mytube/chatroom';//to be changed
    </script>";
    // header("location: index.php");
}elseif (!ctype_alnum($room)) {
    $message = "plz choose a proper name with characters";
    echo "<script>
    alert('$message');
    window.location='http://localhost/mytube/chatroom';//to be changed
    </script>";
}else {
    //connect db
    include 'db/db.php';
}

//check if room exists

$sql = "SELECT * FROM `rooms` WHERE roomname = '$room';";
$result = mysqli_query($conn, $sql);
if($result){
    if (mysqli_num_rows($result) > 0) {
        $message = "plz choose a different room name";
        echo "<script>
        alert('$message');
        window.location='http://localhost/mytube/chatroom';
        </script>";
    }else{
        $sql = "INSERT INTO rooms (`roomname`, `stime`) VALUES ('$room',CURRENT_TIMESTAMP);"; 
        if(mysqli_query($conn,$sql)){
            $message = "your room is created";
            echo "<script>
            alert('$message');
            window.location='http://localhost/mytube/chatroom/rooms.php?roomname=$room';
            </script>";
        }}
}else{
    echo "errpr" . mysqli_error($conn);
}
?>