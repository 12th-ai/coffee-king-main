
var black = `var(--blck)`;
var white = `var(--white)`;
var drop = document.getElementsByClassName("dropdown");
for(var y = 0; y < drop.length; y++){
    var dropA, dropBtn;
    dropA = drop[y].getElementsByTagName('a');
    dropBtn = drop[y].getElementsByTagName('button');
    for(var i = 0; i < dropA.length; i++){
        if(dropA[i].classList.contains("activeDrop")){
            dropA[i].style.background = `${black}`;
            dropA[i].style.color = `${white}`;
            dropA[i].parentElement.previousElementSibling.classList.add("activeNav");
        }
    }
}

var pswdInpDiv = document.getElementsByClassName('passwordInput');
for(var i = 0; i < pswdInpDiv.length; i++){
    var pswdInp = pswdInpDiv[i].getElementsByTagName('input')[0];
    var pswdBtn = pswdInpDiv[i].getElementsByTagName('img')[0];
    pswdInp.addEventListener("keyup", function(){
        if(this.value == ''){
            this.nextElementSibling.style.display = 'none';
        }else{
            this.nextElementSibling.style.display = 'block';
        }
    });
    pswdBtn.addEventListener("click", function(){
        if(this.previousElementSibling.type === "password"){
            this.previousElementSibling.type = 'text';
            this.src = "../../../../assets/09/eye-slash.svg"
        }else{
            this.previousElementSibling.type = "password";
            this.src = "../../../../assets/09/eye.svg";
        }
    })
}

var btn = document.getElementsByClassName("dropdown");
for(let i = 0; i < btn.length; i++){
    btn[i].onclick = function () {
        this.classList.toggle("navChange");
    }
};

var closeBtn = document.getElementById("nav-closing");
var menu = document.getElementById("navMenu");
var openBtn = document.getElementById("menuOpen");

openBtn.onclick = function(){
    menu.classList.add("openNav");
};

closeBtn.onclick = function(){
    menu.classList.remove("openNav");
}

var headers = document.getElementsByClassName("header");
for(var i = 0; i < headers.length; i++){
    var headerA = headers[i].getElementsByTagName('a');
    for(var y = 0; y < headerA.length; y++){
        headerA[y].addEventListener("click", function(){
            menu.classList.remove("openNav");
        })
    }
    // console.log(headerA);
}

var nav = document.getElementById("mainHeader");

window.onscroll = function () {
    if(document.body.scrollTop > 100 || document.documentElement.scrollTop>100){
        nav.style.background = "white";
        nav.style.boxShadow = "0px 9px 19px -9px #676c6e71";
    }else{
        nav.style.boxShadow = " none";
    }
}

var video = document.getElementById("myVideo");
var vidButton = document.getElementById("vidBtn");
var vidButtonImg = document.getElementById("vidButtonImg");
var attr = document.createAttribute('controls');
vidButton.onclick = function (){
    if(video.paused){
        video.play();
        vidButtonImg.src = "../../../assets/icons8_pause_2.svg";
        video.setAttributeNode(attr);
    }else{
        video.pause();
        vidButtonImg.src = "../../../assets/icons8_play_2.svg";
        video.removeAttributeNode(attr);
    }
}
