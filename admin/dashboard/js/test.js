var cover = document.getElementById("cover");
var openBtn = document.getElementById("open");
var closeBtn = document.getElementById("close");
openBtn.addEventListener("click", function(){
    cover.classList.add("openAbs");
});
closeBtn.addEventListener("click", function(){
    cover.classList.remove("openAbs");
});