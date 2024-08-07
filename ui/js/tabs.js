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
