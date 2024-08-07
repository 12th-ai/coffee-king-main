var slider = document.getElementById("slider");
var min = slider.min;
var max = slider.max;
var svalue = slider.value;
var filtBtn = document.getElementById('filt');
slider.style.background = `linear-gradient(to right, #c0aa83 0%, #c0aa83 ${(svalue - min) / (max - min)*100}%, #242424 ${(svalue - min) / (max - min)*100}%, #242424 100%)`;
slider.oninput = function(){
    var filtSlid = document.getElementById("filtSlid");
    slider.style.background = `linear-gradient(to right, #c0aa83 0%, #c0aa83 ${(this.value - this.min) / (this.max - this.min)*100}%, #242424 ${(this.value - this.min) / (this.max - this.min)*100}%, #242424 100%)`;
    filtSlid.innerHTML = this.value;
}

filtBtn.onclick = function(){
    var i, card, priceDiv,priceDivIn, cleanpriceDivIn, showingSize;
    card = document.getElementsByClassName("product-crd");
    val = document.getElementById("slider").value;
    for(i=0;i<card.length;i++){
        priceDiv = card[i].getElementsByClassName("product-crd-price")[0];
        priceDivIn = priceDiv.getElementsByTagName('h1')[0];
        cleanpriceDivIn = priceDivIn.innerHTML.replace(/\D/g, "") / 100;
        if(cleanpriceDivIn >= val){
            card[i].style.display = "flex";
            card[i].style.maxHeight = "600px";
        }else{
            card[i].style.display = "none";
            card[i].classList.remove("hey");
        }
    }
}

var cautionMsg = document.getElementById("caution");
var cautionMaxMsg = document.getElementById("caution2");
var cautionMinMsg = document.getElementById("caution3");
var cautionInpMsg = document.getElementById("caution4");
var multiFilt = document.getElementById("multiFilt");
multiFilt.onclick = function(){
    var minFiltt = document.getElementById("minFilt").value;
    var maxFiltt = document.getElementById("maxFilt").value;
    var i, card, price, priceVal, priceDiv,priceDivIn, cleanpriceDivIn, clean;
    card = document.getElementsByClassName("product-crd");
    val = document.getElementById("slider").value;
    for(i=0;i<card.length;i++){
        price = card[i].getElementsByTagName('p')[0];
        priceDiv = card[i].getElementsByClassName("product-crd-price")[0];
        priceDivIn = priceDiv.getElementsByTagName('h1')[0];
        priceVal = price.innerHTML;
        cleanpriceDivIn = parseInt(priceDivIn.innerHTML.replace(/\D/g, "") / 100);
        if(cleanpriceDivIn >= minFiltt && cleanpriceDivIn <= maxFiltt){
            card[i].style.display = "flex";
            card[i].style.maxHeight = "600px";
            cautionMsg.style.display = "none";
        }else{
            card[i].style.display = "none";
            cautionMsg.style.display = "block";
        }

        if(minFiltt == "" || maxFiltt == ""){
            card[i].style.display = "flex";
            card[i].style.maxHeight = "600px";
            cautionMsg.style.display = "block";
        }else{
            cautionMsg.style.display = "none";
        }

        if(maxFiltt > 23 ){
            cautionMaxMsg.style.display = "block";
        }else{
            cautionMaxMsg.style.display = "none";
        }

        if(minFiltt < 1 ){
            cautionMinMsg.style.display = "block";
        }else{
            cautionMinMsg.style.display = "none";
        }

        if(Number(minFiltt) > Number(maxFiltt)){
            card[i].style.display = "flex";
            card[i].style.maxHeight = "600px";
            cautionMsg.style.display = "block";
        }else{
            cautionMsg.style.display = "none";
        }
    }
}