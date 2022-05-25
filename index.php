<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="pragma" content="no-cache" />
    <title>MyTube</title>
    <link href="style.css?version=15" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="global/dropdown/style.css?version=8">
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
    <!-- <svg viewBox="0 0 155 155" preserveAspectRatio="xMidYMid meet" focusable="false" class="style-scope yt-icon" style="pointer-events: none; display: block; width: 100%; height: 100%;"><g fill="none" fill-rule="evenodd" viewBox="0 0 155 155" class="style-scope yt-icon"><path d="M3.9 76.2C3.9 37.9 32.7 13 68.3 13c39.1 0 65.4 27.6 64.4 63.2 0 3.1-.3 6.2-.7 9.2-.7 4.8-6.2 8-7.8 12.4-1.8 5 .2 11-2.7 15.4a59.7 59.7 0 0 1-18.6 17.7c-9.6 5.9-21.6 4-35 4.3-12.7.4-24 2.9-33.8-2.7-18.5-10.6-30.2-30.9-30.2-56.3" fill="#EEE" class="style-scope yt-icon"></path><path d="M78.7 92.5c14.1-6.8 5.6-21 1.4-26.3 4.3 3.2 7.6 1.6 9.2.3 1.7-1.3 2.6-5-.9-8-3.4-3-13.9-13.5-21.6-20.8-.3-.2-18.6-1.7-28.2 8.3-8.6 8.9-14.4 33.2-14.4 33.2 16.1 23.5 11.9 35 5.6 44.5 10.7 7.7 49-6.6 48-7.6-9.1-8.1-10.2-18.3.9-23.6" fill="#FF76DA" class="style-scope yt-icon"></path><g transform="translate(28 115.7)" class="style-scope yt-icon"><mask fill="#fff" class="style-scope yt-icon"><path d="M1 .4h74V25H1z" class="style-scope yt-icon"></path></mask><path d="M40.3 25c8.7-.3 16.8-1.9 24-4.6 1.7-.6 1-1.4 2.7-2.2 1.4-.6 5.2-1.3 6.5-2.1l1.4-.9c-2.2-1-5.7-2.7-9.5-4.8-1.2-.6-4.1-.9-5.4-1.6-1.3-.7-.9-2-2.2-2.7a100.6 100.6 0 0 1-8-5.7H6.3c-1 5.3-3 9.7-5.3 13.1 1.2 1 2.5 1.8 3.9 2.6s5.3 1.4 6.8 2.1c1.4.7.4 1.6 1.8 2.2 8 3.3 17.1 4.9 26.8 4.6" fill="#00D4B5" mask="url(#account_settings__b)" class="style-scope yt-icon"></path></g><path d="M32.9 131.8a59 59 0 0 0 8.6 4.3h50.7c3.3-1.2 6.4-2.7 9.3-4.3H32.9zM37.6 126h55.8c-2.5-1.2-5-2.7-7.6-4.2H37.6v4.3z" fill="#FFF" class="style-scope yt-icon"></path><path d="M46.4 55c14.1 1.7 14.1 14.3 14.1 14.3L55 74s-2.3-3.3-7.8-2.1c2.2 1.3 3.7 3.2 4.8 5.3 2.6 5.1 2.1 13-6 16.4-3 1.2-7 4-7.3 8.3-.4 6.5 4.6 10 11.6 8.7 2 9-6.2 24.8-26.9 22.5a22.9 22.9 0 0 1-18-32.7c5.4-11.8 22.4-14.7 18.9-21L46.4 55z" fill="#4620AE" class="style-scope yt-icon"></path><path d="M56.1 32a31 31 0 0 0-27 9.3C22.7 47.9 17.2 57 19 67.7c.8 3.7 40.7-35 37-35.7" fill="#00D4B5" class="style-scope yt-icon"></path><path d="M14.3 35c0-5.2 4-8.5 8.7-8.5 5.3 0 8.9 3.7 8.7 8.5a8.6 8.6 0 0 1-8.7 8.7c-5 .1-8.7-3.5-8.7-8.7" fill="red" class="style-scope yt-icon"></path><path d="M73.9 72.5c-2.8-1.3-6-1-6.8 2.3-.6 2.2.3 5.8 4.8 7.4a27.9 27.9 0 0 0 14.4 1.3c.6-3.1-.2-6.4-1.4-9.4-2.7.4-6.8.4-11-1.6" fill="#FFF" class="style-scope yt-icon"></path><path d="M104.6 46H75.7c-3.6 0-5 2-5 5 0 2.9.7 5.7 4.6 5.7h30.3l-1-10.7z" fill="#4620AE" class="style-scope yt-icon"></path><path d="M137.8 42.6h-29c-5.8 0-8.3 3.3-8.3 8 0 4.8 2.3 9.4 7.8 9.4h28.4l1.1-17.4z" fill="#4620AE" class="style-scope yt-icon"></path><path d="M101.3 57.8a.8.8 0 0 1-.6-.4 13 13 0 0 1-1.2-6.5c0-.4.4-.7.8-.7s.7.4.7.8c-.2 1.9.2 4.3 1 5.7a.8.8 0 0 1-.7 1.1" fill="#9A4DFF" class="style-scope yt-icon"></path><path d="M131 51.2c0-6.9 4.8-11.4 10.7-11.4 6.4 0 10.8 5 10.6 11.4-.2 6.6-4.2 11.5-10.6 11.7-6.1.2-10.6-4.6-10.6-11.7" fill="red" class="style-scope yt-icon"></path><path d="M136.1 51.3c0-3.7 2.5-6 5.6-6 3.4 0 5.7 2.6 5.6 6-.1 3.4-2.3 6-5.6 6.1-3.2.1-5.6-2.4-5.6-6.1" fill="#FFF" class="style-scope yt-icon"></path><path d="M124.4 66c.7-5.9 0-10.4-3.3-10.8-3.4-.4-4.5 4-4.5 4s.2-4.5-3-5c-3.2-.4-4.6 4.4-4.6 4.4s.9-4.7-3.6-4.3c-4.5.3-9.2 11.5-7.2 28.3a38.3 38.3 0 0 0 23.3 30.6c5.4-8 9-17.5 10.4-27.8-5.5-3.5-8.3-12.3-7.5-19.5" fill="#FF76DA" class="style-scope yt-icon"></path><path d="M107 71.7a.8.8 0 0 1-.7-.8c0-2.6.7-7.8 1.4-10.7 0-.4.5-.7.9-.6.4 0 .6.5.5.9-.7 3.2-1.3 8.1-1.3 10.4 0 .4-.3.8-.7.8M114.8 71.7a.8.8 0 0 1-.7-.8c0-2.6.7-7.8 1.3-10.7.1-.4.5-.7 1-.6.3 0 .6.5.5.9-.7 3.2-1.3 8.1-1.3 10.4 0 .4-.4.8-.8.8" fill="#4620AE" class="style-scope yt-icon"></path><path d="M66.8 37.7l-.7-.6a20.2 20.2 0 0 0-10-5L19.2 67.6c.7 3.7 2.3 7.5 5 11.5l42.6-41.5z" fill="red" class="style-scope yt-icon"></path><path d="M48.6 55.4C59.1 53 71.6 45 66.8 37.7L48.6 55.4z" fill="#4620AE" class="style-scope yt-icon"></path></g></svg> -->
    <!-- leftside start-->
    <div id="leftside">
      <div id="searchbox">
        <input onfocusout="searchFocusOut()" onfocus="searchFocusIn()" class="searchInput" type="text" placeholder="Search">
        <div class="h"><img src="global/searchbar/search.png" class="icon-size" alt="search-icon"></div>
        <div id="i2"><img src="global/searchbar/microphone.png" class="icon-size" alt="microphone-icon"></div>
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
      <img class="flags red-flag" src="global/logo/red-flag.png" width="30" height="30" alt="red flag">
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
          <img class="flags india-flag" src="global/logo/india-flag.png" width="30" height="30" alt="india flag">
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