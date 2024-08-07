var faqBtn = document.getElementsByClassName('faq-btn');
var faqCnt = document.getElementsByClassName('faq-content');
var chevrBtn = document.getElementById("myChevron");
for(var i = 0 ; i < faqBtn.length ; i++){
    faqBtn[i].addEventListener("click", function(){
        var currentFaq = document.getElementsByClassName("activeFaqBtn");
        currentFaq[0].className = currentFaq[0].className.replace(" activeFaqBtn", "");
        this.className += " activeFaqBtn";
    });
}