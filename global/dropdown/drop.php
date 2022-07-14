
<?php
if(isset($_SESSION['photo'])){
    $photourl = $_SESSION['photo'];
}else{
    $photourl = "global/dropdown/img/default-edit.jpg";
}
echo '<div class="dropdown allllll">
    <div class="account bottom-line">
        <img class="profilephoto" onclick ="profilePhotoChange()" src="' . $photourl . '" alt="Profile Picture">
        <p class="profileName">' . $_SESSION['username'] . '</p>
        <a href="https://myaccount.google.com/u/0/" target="_blank" class="Account-refer roboto">Manage your Google Account</a>
        <img onclick="dropdownClose()" src="global/dropdown/img/cross.png" alt="close" class="d-cross">
</div>
<section class="acc-controls bottom-line">
    <div class="channel cursor hover">
        <img class="icon" src="global/dropdown/img/user.png" alt="User">
        <p class="ptag">Your Channel</p>
    </div>
    <div class="studio cursor hover">
        <img class="icon" src="global/dropdown/img/setting.png" alt="Mytube Studio">
        <p class="ptag">Mytube Studio</p>
    </div>
    <div class="switch cursor hover">
        <img class="icon" src="global/dropdown/img/changeuser.png" alt="change Account">
        <p class="ptag">Switch Account</p>
    </div>
    <div onclick="logout()" class="logout cursor hover">
        <img class="icon" src="global/dropdown/img/signout.png" alt="sign out">
        <p class="ptag">Sign Out</p>
    </div>
</section>
<section class="acc-controls bottom-line">
    <div onclick="chatroom()" class="channel cursor hover">
        <img class="icon" src="global/dropdown/img/chat.png" alt="Chatroom">
        <p class="ptag">MyTube Chatroom</p>
    </div>
    <div class="studio cursor hover">
        <img class="icon" src="global/dropdown/img/language.png" alt="Mytube Studio">
        <p class="ptag">Language: English</p>
    </div>
    <div class="switch cursor hover">
        <img class="icon" src="global/dropdown/img/location.png" alt="change Account">
        <p class="ptag">Location: India</p>
    </div>
    <div class="logout cursor hover">
        <img class="icon" src="global/dropdown/img/settin.png" alt="sign out">
        <p class="ptag">Settings</p>
    </div>
    <div class="logout cursor hover">
        <img class="icon" src="global/dropdown/img/shield.png" alt="sign out">
        <p class="ptag">Your data in Mytube</p>
    </div>
    <div class="logout cursor hover">
        <img class="icon" src="global/dropdown/img/help.png" alt="sign out">
        <p class="ptag">Help</p>
    </div>
    <div class="logout cursor hover">
        <img class="icon" src="global/dropdown/img/feedback.png" alt="sign out">
        <p class="ptag">Send feedback</p>
    </div>
    <div class="logout cursor hover">
        <img class="icon" src="global/dropdown/img/keyboard.png" alt="sign out">
        <p class="ptag">keyboard shortcuts</p>
    </div>
</section>
</div>';

?>