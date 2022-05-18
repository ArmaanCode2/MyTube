//register button redirect
const signinBtn = () => {
    window.location.href = 'register/login/';
}

//dropdown display
isClicked = true;
const showDropdown = () =>{
    const dropUl = document.querySelector('#i6 ul');
    if(isClicked){
        dropUl.style.display = "block";
    }else{
        dropUl.style.display = "none";
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