function switcher(evt, contentName){
    var tabBtns = document.getElementsByClassName("contentBtn");
    var tabContent= document.getElementsByClassName("tabs-content");
    var i;
    for(i=0;i<tabContent.length;i++){
        tabContent[i].style.display = "none";
    }
    document.getElementById(contentName).style.display = "block";
    evt.currentTarget.className += " activeTabBtn";
}

function accountTabs(evt, contentName){
    var tabBtns = document.getElementsByClassName("contentBtn");
    var tabContent= document.getElementsByClassName("tabs-content");
    var i;
    for(i=0;i<tabContent.length;i++){
        tabContent[i].style.display = "none";
    }
    document.getElementById(contentName).style.display = "flex";
    evt.currentTarget.className += " activeTabBtn";
}

var tabBtns = document.getElementsByClassName("contentBtn");
for(var i = 0; i<tabBtns.length;i++){
    tabBtns[i].addEventListener('click', function(){
        var current = document.getElementsByClassName("activeTabBtn")[0];
        current.className = current.className.replace(" activeTabBtn", "");
        this.className += " activeTabBtn";
    });
    document.getElementById("clickedDefault").click();
}

function formInform(contentName,formClassName){
    var tabBtns = document.getElementsByClassName("contentBtn");
    var tabContent= document.getElementsByClassName("tabs-content");
    var i;
    var current = document.getElementsByClassName("activeTabBtn")[0];
    current.className = current.className.replace(" activeTabBtn", "");
    for(i=0;i<tabContent.length;i++){
        tabContent[i].style.display = "none";
    }
    document.getElementById(contentName).style.display = "flex";
    document.getElementsByClassName(formClassName)[0].className += " activeTabBtn";
}


var price = document.getElementById("price");
var tPrice = document.getElementById("tPrice");
var totalQty = document.getElementById("totalQty");
var totalPrice = document.getElementById("totalPrice");
tPrice.innerHTML = price.innerHTML;
totalPrice.innerHTML = totalQty.innerHTML * tPrice.innerHTML;

var qty = document.getElementById("qty");
var upBtn = document.getElementById("up");
var downBtn = document.getElementById("down");
var maxAvailable = document.getElementById("maxAvailable").innerHTML;

if(maxAvailable == 0 || maxAvailable == ""){
    var i = 0;
    var prodQtyBtn = document.getElementsByClassName("cartProd");
    document.getElementById("offStockP").style.display = "block";
    for(i=0;i<prodQtyBtn.length;i++){
        prodQtyBtn[i].style.display = "none";
    }
    for(i=0;i<document.getElementsByClassName("priceP").length;i++){
        document.getElementsByClassName("priceP")[i].style.display = "none";
    }
    for(i=0;i<document.getElementsByClassName("soldSpan").length;i++){
        document.getElementsByClassName("soldSpan")[i].style.display = "flex";
    }
}else{
    document.getElementById("offStockP").style.display = "none";
}
upBtn.onclick = function(){
    qty.value ++;
    totalQty.innerHTML = qty.value;
    totalPrice.innerHTML = Number(price.innerHTML * qty.value).toFixed(2);
    if(Number(qty.value) >= Number(maxAvailable)){
        qty.value = maxAvailable;
        totalQty.innerHTML = maxAvailable;
        totalPrice.innerHTML = Number(maxAvailable * price.innerHTML).toFixed(2);
    }else{
        qty.value = qty.value;
    }
}
downBtn.onclick = function(){
    qty.value --;
    totalQty.innerHTML = qty.value;
    totalPrice.innerHTML = Number(price.innerHTML * qty.value).toFixed(2);
    if(qty.value <= 1){
        qty.value = 1;
        totalQty.innerHTML = 1;
        totalPrice.innerHTML = 1 * price.innerHTML;
    }
}
qty.oninput = function(){
    this.max = maxAvailable;
    this.min = 1;
    totalQty.innerHTML = this.value;
    totalPrice.innerHTML = Number(price.innerHTML * qty.value).toFixed(2);
    if(this.value > Number(maxAvailable)){
        this.value = maxAvailable;
        totalQty.innerHTML = this.value;
        totalPrice.innerHTML = Number(price.innerHTML * this.value).toFixed(2);
    }
}
var cartBtn = document.getElementsByClassName("cart-btn");
var cartNber = document.getElementsByClassName("header-next-number")[0];
var cartN = Number(cartNber.innerHTML);
for(var i = 0; i < cartBtn.length; i++){
    cartBtn[i].addEventListener("click", function(){
        // this.disabled = true;
        var projection = qty.value;
        cartNber.innerHTML = projection;
    });
}

function imgPreview(lilImg){
    var mainImg = document.getElementById("bigImg");
    mainImg.src = lilImg.src;
}

var smallImage = document.getElementsByClassName("smallImages");
for(let i = 0; i < smallImage.length;i++){
    smallImage[i].addEventListener("click", function(){
        var activeSmallImg = document.getElementsByClassName("hueImg")[0];
        activeSmallImg.className = activeSmallImg.className.replace("hueImg", "");
        this.className += " hueImg";
    });
    document.getElementById("clickedSmallImg").click();
}

var modalOpenBtn = document.getElementById("modalBtn");
var modal = document.getElementById("modal");
modalOpenBtn.onclick = function(){
    var i, modImg, modalImage,modImgIn;
    modImg = document.getElementsByClassName("bigImg");
    modalImage = document.getElementById("modalSrc");
    for(i=0; i<modImg.length;i++){
        modImgIn = modImg[i].getElementsByTagName("img")[0];
        modal.style.display = "flex";
        modal.style.width = "100%";
        modal.style.height = "100%";
        modalImage.src = modImgIn.src;
    }
}

var prodName = document.getElementById("prodName").innerHTML;

var prodNameFill = document.getElementsByClassName("prodNameFill");
for(var i=0;i<prodNameFill.length;i++){
    prodNameFill[i].innerHTML = prodName;
}

var modelCloseBtn = document.getElementById("closeModal");
modelCloseBtn.onclick = function(){
    modal.style.width = "0%";
}