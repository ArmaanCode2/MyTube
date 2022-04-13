<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>MyTube</title>
    <script src="script.js"></script>
    <style>
    *{
  margin: 0;
  padding: 0;
}
  
  #d1{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
  }
  
  input{
  width : 40%;
  padding-bottom: 15px;
  margin : 10px auto;
  }
  
  #bt{
  width: fit-content;
  font-family: "Lato";
  text-transform: uppercase;
  font-weight: 300;
  border-radius: 2px;
  background-color: transparent;
  border: none;
  color: #fff;
  background: linear-gradient(to left, #2ecc71 50%, #27ae60 50%);
  padding: 0.7em 1.5em;
  background-size: 200% 100%;
  transition: all 0.5s ease;
  cursor:pointer;
  background-position: right bottom;
  }

  #bt:hover{
    background-position: left bottom;
    }
  #h1{
    font-size: 55px;
    color: black;
  }

  .inp{
    height: 100px;
  }

  ::-webkit-input-placeholder {
    text-align: start;
    padding: 5px;
  }

  .inp2{
    height: 50px;
  }

  @media only screen and (max-width: 600px) {
    #h1{
      font-size: 25px;
      color:red;
    }
    #d1{
      padding: 31px;
    }
    .inp2{
    width: 250px;
    }
    .inp{
    width: 250px;
    }
  }
  </style>
  </head>
  <body id="body2">

  <?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST'){
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dataBase = "mytube_reports";

  $email = $_POST["email"];
  $rep = $_POST["report"];
  $conn = mysqli_connect($servername,$username,$password,$dataBase);//this takes 3 arguments
  $sql = "INSERT INTO `reportt` (`email`, `report`) VALUES ('$email', '$rep')";
  $result = mysqli_query($conn,$sql);
  }
  ?>


<center>
  <form action="report.php" method="post">
  <div id="d1">
  <h1 id="h1">Enter Your Report Here</h1>
  <input placeholder="Email..." name="email"type="text" class="inp2" id="inp1">
  <input placeholder="Report..." type="text"name="report" class="inp" id="inp2"></input>
  <button type="submit" id="bt">SUBMIT</button>
  </form>
</center>
  </div>
  </body>
</html>