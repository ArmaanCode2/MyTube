<?php
  session_start();
  if(isset($_SESSION['loggedin'])){
      $loggedin = true;
  }else{
    $loggedin = false;
    echo "<script>
    alert('You Need To login for Creating a room');
    window.location='http://localhost/mytube/register/login';
    </script>";
  }
?>

<?php

$roomname = $_GET['roomname'];

include 'db/db.php';
//wheter room exists

$sql = "SELECT * FROM `rooms` WHERE roomname = '$roomname'";
$result = mysqli_query($conn,$sql);

if($result){

    if(mysqli_num_rows($result) == 0){
        $message = "this room does not exists";
        echo "<script>
        alert('$message');
        window.location='http://localhost/chatroom';
        </script>";
    }

}else{
    echo "error :" . mysqli_error($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/product/">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
<style>
body {
  margin: 0 auto;
  max-width: 800px;
  padding: 0 20px;
}

.container {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #ddd;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  max-width: 60px;
  width: 100%;
  
  margin-right: 20px;
  border-radius: 50%;
}

.container img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}

.anyclass{
    height:500px;
    overflow-y:scroll;
}
</style>
</head>
<body>

<h2>Chat Messages - <?php echo $roomname; ?></h2>

<div class="container">
    <div class="anyclass">
  
  </div>
</div>

<input type="text" class="form-control" name ="usermsg" id="usermsg" placeholder="Write a Message">

<button class="btn btn-default" name="submitmsg" id="submitmsg">Send</button>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
<script>
  setInterval(runFunction, 1000);
    function runFunction(){
      $.post("htcont.php", {room:'<?php echo $roomname ?>'},
        function(data,status) {
          document.getElementsByClassName('anyclass')[0].innerHTML = data;
        }
      )
    }
    var input =  document.getElementById("usermsg");
    input.addEventListener("keyup",function(event){
        event.preventDefault();
        if(event.keyCode === 13){
            document.getElementById("submitmsg").click();
            input.value = "";
        }
    });
    //if user sumbits the form
    $("#submitmsg").click(function(){
        var clientmsg = $("#usermsg").val();
        $.post("postmsg.php",{text:clientmsg,room:'<?php echo $roomname; ?>',ip:'<?php echo $_SESSION['username']; ?>'},
        function(data,status){
            document.getElementsByClassName('anyclass')[0].innterHTML = data;});
        return false;
    });
</script>
</body>
</html>