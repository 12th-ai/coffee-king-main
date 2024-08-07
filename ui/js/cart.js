var cartBtn = document.getElementsByClassName("cart-btn");
var cartNber = document.getElementsByClassName("header-next-number")[0];
var cartN = Number(cartNber.innerHTML);
var projection = 0;
for(var i = 0; i < cartBtn.length; i++){
    cartBtn[i].addEventListener("click", function(){
        this.disabled = true;
        projection++;
        cartNber.innerHTML = projection;
    });
}
var cartN = projection;