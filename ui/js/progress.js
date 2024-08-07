var progrcard = document.querySelectorAll(".member-cont-btm-crd-skill-card");
for(var i = 0; i < progrcard.length; i++){
    var progressindicate = progrcard[i].querySelector(".progressindicate");
    var progress = progrcard[i].getAttribute("data-skill");
    var progressline = progrcard[i].querySelector(".skill-card-abs");
    progressline.style.width = `${progress}%`;
}