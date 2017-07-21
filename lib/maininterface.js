function openLeftMenu(){

    document.getElementById("sidemenu").style.width="150px";
    setTimeout('document.getElementById("sidemenuexpand").style.left="100px"', 80);
    document.getElementById("sidemenubottomentry").style.backgroundImage='url("./ressources/shrink_icon@x2.png")';
    document.getElementById("sidemenuexpand").onclick = function(){ closeLeftMenu(); };
}

function closeLeftMenu(){

    document.getElementById("sidemenu").style.width="50px";
    setTimeout('document.getElementById("sidemenuexpand").style.left="0px"', 80);
    document.getElementById("sidemenubottomentry").style.backgroundImage='url("./ressources/expand_icon@x2.png")';
    document.getElementById("sidemenuexpand").onclick = function(){ openLeftMenu(); };
}