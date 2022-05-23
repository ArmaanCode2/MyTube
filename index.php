<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>MyTube</title>
    <link href="style.css?version=12" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="global/dropdown/style.css?version=5">
    <script src="https://kit.fontawesome.com/709718c5e6.js" crossorigin="anonymous"></script>
    <script src="https://cdn.lordicon.com/lusqsztk.js"></script>
  </head>
  <body>
    <!-- checking if user is logged in or not -->
  <?php
  session_start();
  if(isset($_SESSION['loggedin'])){
      $loggedin = true;
  }else{
    $loggedin = false;
  }
?>
    
    <!-- leftside start-->
    <div id="leftside">
      <div id="searchbox">
        <input onfocusout="searchFocusOut()" onfocus="searchFocusIn()" class="searchInput" type="text" placeholder="Search">
        <div class="h"><img src="global/search.png" class="icon-size" alt="search-icon"></div>
        <div id="i2"><img src="global/microphone.png" class="icon-size" alt="microphone-icon"></div>
      </div>

<div id="home" class="h1">
<i class="fas fa-home"><b><p style="display: inline;color:#212121;">Home</p></b></i>
</div>
<div></div>
<div id="explore" class="h1 all">
<i class="far fa-compass"><b><p style="display: inline;color:#212121;">Explore</p></b></i>
</div>

<div id="subscription" class="h1 all">
<i class="fab fa-youtube"><b><p style="display: inline;color:#212121;">Subscriptions</p></b></i>
</div>

<hr width="14%" id="hr">

<div id="library" class="h1 all">
<i class="fas fa-book-open"><b><p style="display: inline;color:#212121;">Library</p></b></i>
</div>

<div id="history" class="h1 all">
<i class="fas fa-history"><b><p style="display: inline;color:#212121;">History</p></b></i>
</div>
<?php
if($loggedin){
echo '<div id="your" class="h1 all">
<i class="fas fa-video"><b><p style="display: inline;color:#212121;">Your Video</p></b></i>
</div>

<div id="watch" class="h1 all">
<i class="fas fa-clock"><b><p style="display: inline;color:#212121;">Watch Later</p></b></i>
</div>';
}
?>
<hr width="14%" id="hr">
<?php
if($loggedin){
  echo '<h4 id="h">MORE FROM MYTUBE</h4>';
}else{
  echo '<div class="leftsignin">
  <p>Sign in to like videos, comment, and subscribe.</p>
  <div onclick="signinBtn()" class="signin">
              <lord-icon
                  src="https://cdn.lordicon.com/dklbhvrt.json"
                  trigger="hover"
                  style="width:25px;height:25px;margin-right:10px;"
                  color="blue">
              </lord-icon>
              <p>LOG IN</p>
            </div>
  </div>
  <hr width="14%" id="hr">';
}
?>
<div id="PREMIUM" class="h1 all">
<i class="fab fa-youtube"><b><p style="display: inline;color:#212121; font-size:15px;">MyTube Premium</p></b></i>
</div>
<?php
if($loggedin){
  echo '<div id="movie" class="h1 all">
<i class="fas fa-film"><b><p style="display: inline;color:#212121;">Movies</p></b></i>
</div>

<div id="game" class="h1 all">
<i class="fas fa-gamepad"><b><p style="display: inline;color:#212121;">Gaming</p></b></i>
</div>';
}
?>

<div id="live" class="h1 all">
<i class="fas fa-stream"><b><p style="display: inline;color:#212121;">Live</p></b></i>
</div>
<?php
if($loggedin){
  echo '
  <div id="fash" class="h1 all">
    <i class="fas fa-tshirt"><b><p style="display: inline;color:#212121;">Fasion & Beauty</p></b></i>
  </div>
  
  <div id="your" class="h1 all">
    <i class="fas fa-lightbulb"><b><p style="display: inline;color:#212121;">Learning</p></b></i>
  </div>
  
  <div id="game" class="h1 all">
    <i class="fas fa-trophy"><b><p style="display: inline;color:#212121;">Sports</p></b></i>
  </div>';
}
?>

<hr width="14%" id="hr">

<div id="your" class="h1 all">
<i class="fas fa-cog"><b><p style="display: inline;color:#212121;">Settings</p></b></i>
</div>

<div id="PREMIUM" class="h1 all">
<a href="report/" target="_blank"><i class="fas fa-flag"><b><p style="display: inline;color:#212121;">Report</p></b></i></a>
</div>

<div id="game" class="h1 all">
<i class="fas fa-question-circle"><b><p style="display: inline;color:#212121;">Help</p></b></i>
</div>

<div id="send" class="h1 all">
<i class="fas fa-comments"><b><p style="display: inline;color:#212121;">Send Feedback</p></b></i>
</div>
<hr width="14%" id="hr">
<div class="endInfo">
  <p>We Team of MyTube present This Website</p>
  <p>Founder: Deepak Vashisht</p>
  <p>Developer: Armaan Vashisht</p>
</div>

</div>
<!-- leftside end-->

<!-- search box start-->
<img src="global/dropdown/drop.php" alt="">
<div id="logo" class="h1">
<?php
// session_destroy();
if($loggedin){
  echo '
      <img class="flags red-flag" src="global/red-flag.png" width="30" height="30" alt="red flag">
      <div id="i3" title="Create"><i class="fas fa-video fa-lg"></i></div>
      <div id="i6"><!--Evrything shown in dropdown-->
        <i onclick="showDropdown()" class="fas fa-user-circle fa-lg"></i>
        <div class="blend"></div>
          <ul style="display:none;">';}?>
          <?php if ($loggedin){ echo include 'global/dropdown/drop.php';
         echo '</ul>
         </div>
    ';
  }
?>
  <i class="fab fa-youtube"><b><p style="display: inline;color:#212121;" title="MyTube">MyTube</p></b></i>
  <?php
  if($loggedin){
    echo '<div id="i4" title="Mytube apps"><i class="fas fa-mobile-alt fa-lg"></i></div>
          <div id="i5" title="Notifications"><i class="fas fa-bell fa-lg"></i></div>
          <img class="flags india-flag" src="global/india-flag.png" width="30" height="30" alt="india flag">
        ';
      }
  ?>
</div>

<?php
  if(!$loggedin){
    echo '<div onclick="signinBtn()" class="signin">
            <lord-icon
                src="https://cdn.lordicon.com/dklbhvrt.json"
                trigger="hover"
                style="width:25px;height:25px;margin-right:10px;"
                color="blue">
            </lord-icon>
            <p>LOG IN</p>
          </div>';
  }
 ?>
<hr color="lightgrey" id="hr2">
<!-- search box end-->

<!-- button line start-->
<div id="btnrow">

<button id="brow">All</button>
<button id="brow">AMV's</button>
<button id="brow">Music</button>
<button id="brow">Naruto</button>
<button id="brow">Comedy</button>
<button id="brow">Live</button>
<button id="brow">AoT</button>
<button id="brow">Tokyo Ghoul</button>
<button id="brow">GTA</button>
<button id="brow">Xbox</button>
<button id="brow">Death Note</button>
<button id="brow">parasite</button>
<button id="brow">Boruto</button>

</div>
<div id="allvid">
<div id="vidsec">
<div id="vid1">
  <iframe width="264" height="150" src="https://www.youtube.com/embed/jqeJ-loLG3M" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <div><img class="vidlogo" src="./global/channel_logo.jpg">
  </div><p>।। श्री शिव महापुराण कथा ।। अध्याय -२ ।।</p>

</div>

<div id="vid1">
  <iframe width="264" height="150" src="https://www.youtube.com/embed/GmTNMSzrFHw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <div><img class="vidlogo" src="./global/channel_logo.jpg">
  </div><p>।। श्री शिव महापुराण कथा ।। अध्याय -१ ।।</p>

</div>

<div id="vid1">
  <iframe width="264" height="150" src="https://www.youtube.com/embed/JO82o2E8E5g" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <div><img class="vidlogo" src="./global/channel_logo.jpg">
  </div><p>गुरु पूर्णिमा की बधाई</p>

</div>

<div id="vid1">
  <iframe width="264" height="150" src="https://www.youtube.com/embed/-bL9xRkecsY" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <div><img class="vidlogo" src="./global/channel_logo.jpg">
  </div><p id="p1">श्री शनि जयंती की शुभकामनाएं</p>

</div>

</div>




<div id="vidsec">

<div id="vid1">
  <iframe width="264" height="150" src="https://www.youtube.com/embed/5-M8tO7QZis" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <div><img class="vidlogo" src="./global/channel_logo.jpg">
  </div><p>ज्येष्ठ कृष्ण पक्ष ।। श्री अपरा एकादशी व्रत ।। कथा ।।</p>
</div>

<div id="vid1">
  <iframe width="264" height="150" src="https://www.youtube.com/embed/vJT2XgH9HAw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <div><img class="vidlogo" src="./global/channel_logo.jpg">
  </div><p>।। श्री गणेश चतुर्थी व्रत कथा ।।</p>

</div>

<div id="vid1">
  <iframe width="264" height="150" src="https://www.youtube.com/embed/x-hC27mMshw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <div><img class="vidlogo" src="./global/channel_logo.jpg">
  </div><p>Home Remedy for entire family</p>

</div>

<div id="vid1">
  <iframe width="264" height="150" src="https://www.youtube.com/embed/KmtjkYRw-aM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <div><img class="vidlogo" src="./global/channel_logo.jpg">
  </div><p>वैशाख कृष्ण पक्ष ।। श्री वरुथिनी एकादशी व्रत ।। कथा ।।</p>
</div>

</div>




<div id="vidsec">

<div id="vid1">
  <iframe loading="lazy" width="264" height="150" src="https://www.youtube.com/embed/TA14WvjCphM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <div><img class="vidlogo" src="./global/channel_logo.jpg">
  </div><p>।। श्री एकादशी व्रत कथा ।। चैत्र शुक्ल पक्ष ।।</p>

</div>

<div id="vid1">
  <iframe loading="lazy" width="264" height="150" src="https://www.youtube.com/embed/85UY2vQ4PIQ" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <div><img class="vidlogo" src="./global/channel_logo.jpg">
  </div><p>।। श्री एकादशी व्रत कथा ।। फाल्गुन शुक्ल पक्ष ।।</p>

</div>

<div id="vid1">
  <iframe loading="lazy" width="264" height="150" src="https://www.youtube.com/embed/-h04jSMy36Y" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <div><img class="vidlogo" src="./global/channel_logo.jpg">
  </div><p>।। श्री गंगा जी और श्री त्रिवेणी जी ।। ।। स्नान का महत्व ।। माघ मास में ।।</p>

</div>

<div id="vid1">
  <iframe loading="lazy" width="264" height="150" src="https://www.youtube.com/embed/RXIglWSiSuU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
  <div><img class="vidlogo" src="./global/channel_logo.jpg">
  </div><p>पूजन और फल भाग - 1</p>
</div>

</div>




</div>
<script src="js/script.js?verson=5"></script>
  </body>
</html>