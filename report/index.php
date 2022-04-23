<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>MyTube</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="script.js"></script>
    <link rel="stylesheet" href="style.css">
 </head>
  <body id="body2">

  <?php
session_start();
if(isset($_SESSION['error'])){
    echo '<div style="z-index:2;" class="alert alert-warning d-flex alert-dismissible align-items-center fade show" role="alert">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-exclamation-triangle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Warning:">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
            </svg>
            <div> Error    ' . $_SESSION['error'] .  ' 
            </div>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
    session_destroy();      
  }
  if(isset($_SESSION['success'])){
    echo '<div style="z-index:2;" class="alert alert-success alert-dismissible fade show" role="alert">
    <strong>Thanks!  </strong>' .  $_SESSION['success'] . ' 
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>';  
    session_destroy();      
}

?>

<center>
  <form action="../report/handle.php" method="post">
  <div id="d1">
  <h1 id="h1">Enter Your Report Here</h1>
  <input placeholder="Email..." name="email" type="email" class="inp2" id="inp1">
  <input placeholder="Report..." type="text" name="report" class="inp" id="inp2"></input>
  <button type="submit" id="bt">SUBMIT</button>
  </form>
</center>
  </div>
  </body>
</html>