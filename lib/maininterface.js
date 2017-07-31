function openLeftMenu(){

    document.getElementById("sidemenu").style.width="180px";
    setTimeout('document.getElementById("sidemenuexpand").style.left="120px"', 80);
    document.getElementById("sidemenubottomentry").style.backgroundImage='url("./ressources/shrink_icon@x2.png")';
    document.getElementById("sidemenuexpand").onclick = function(){ closeLeftMenu(); };
}

function closeLeftMenu(){

    document.getElementById("sidemenu").style.width="60px";
    setTimeout('document.getElementById("sidemenuexpand").style.left="0px"', 80);
    document.getElementById("sidemenubottomentry").style.backgroundImage='url("./ressources/expand_icon@x2.png")';
    document.getElementById("sidemenuexpand").onclick = function(){ openLeftMenu(); };
}