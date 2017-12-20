var homeactivated = awayactivated = false;
var teamselected = null;

$(document).keydown(function(letter){

  // letter.keyCode == 65 ==> A
  // letter.keyCode == 90 ==> Z

  if(letter.keyCode == 65){
    if(homeactivated == false){
      selectbtn("homeindicator");
      homeactivated=true;
      unselectbtn("awayindicator");
      awayactivated=false;
      teamselected="home";
      return;
    }else{
      unselectbtn("homeindicator");
      homeactivated=false;
      teamselected=null;
      return;
    }
  }

  if(letter.keyCode == 90){
    if(awayactivated == false){
      selectbtn("awayindicator");
      awayactivated=true;
      unselectbtn("homeindicator");
      homeactivated=false;
      teamselected="away";
      return;
    }else{
      unselectbtn("awayindicator");
      awayactivated=false;
      teamselected=null;
      return;
    }
  }
});

function selectbtn(team){
  document.getElementById(team).style.display="inline";
};

function unselectbtn(team){
  document.getElementById(team).style.display="none";
};

$("#fielddiv").click(function(){
  if (teamselected==null) {
    console.log("Please select a team before clicking on pitch!");
    return;
  }else {
    console.log(teamselected);
    teamselected=null;
    homeactivated=false;
    awayactivated=false;
    unselectbtn("homeindicator");
    unselectbtn("awayindicator");
  }
});






function openNav() {
    document.getElementById("rightSideNavigation").style.width = "450px";
}

function closeNav() {
    document.getElementById("rightSideNavigation").style.width = "0";
}
