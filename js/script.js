//register button redirect
const signinBtn = () => {
    window.location.href = 'register/login/';
}

//dropdown display
isClicked = true;
const dropUl = document.querySelector('#i6 ul');
const blend = document.querySelector(".blend")
const body = document.querySelector("body")
const showDropdown = () =>{
    if(isClicked){
        blend.style.display = "block";
        dropUl.style.display = "block";
        body.classList.add("overflow")
    }else{
        dropUl.style.display = "none";
        blend.style.display = "none";
    }
    isClicked = !isClicked;
}

const logout = () =>{
    window.location.href = 'register/logout/';
}

setTimeout(()=>{
    console.clear();
},20000);

//searchBox input onclick
const searchInput = document.querySelector(".searchInput");
const searchBox = document.querySelector("#searchbox");
function searchFocusIn(){
    searchInput.style.width = "330px";
    searchBox.style.width = "51%";
}

function searchFocusOut(){
    searchInput.style.width = "119px";
    searchBox.style.width = "35%";
}

function dropdownClose(){
    dropUl.style.display = "none";
    blend.style.display = "none";
    body.classList.remove("overflow")
}

// for clicking on profile picture
function profilePhotoChange(){
    window.location.href = 'profilephoto/';
}

function detectFileChange(){
    const file = document.querySelector('#file');
    file.addEventListener('change',() => {
        document.querySelector('.submit').click();
    })
}


//direct to chatroom
function chatroom(){
    window.location.href = 'chatroom';
}