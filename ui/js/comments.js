var repbtn = document.querySelectorAll(".comment-crd");
for(var i = 0; i < repbtn.length; i++){
    var h3 = repbtn[i].querySelector(".main-h3");
    var repButton = repbtn[i].querySelector(".reply-btn");
    var openRepBtn = repbtn[i].querySelector(".open-reply-btn");
    repButton.addEventListener("click", function(){
        this.nextElementSibling.classList.toggle("openReply");
    })
    openRepBtn.addEventListener("click", function(){
        this.nextElementSibling.classList.toggle("openReplySection");
        this.classList.toggle("openReplyButton");
    })
}