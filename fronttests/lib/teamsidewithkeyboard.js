var homeactivated = awayactivated = false;
var teamselected = null;

$(document).keydown(function(letter){

  // letter.keyCode == 65 ==> A
  // letter.keyCode == 65 ==> Z

  if(letter.keyCode == 65){
    if(homeactivated == false){
      selectbtn("teamhome","blue");
      homeactivated=true;
      unselectbtn("teamaway","red");
      awayactivated=false;
      teamselected="home";
      return;
    }else{
      unselectbtn("teamhome","blue");
      homeactivated=false;
      teamselected=null;
      return;
    }
  }

  if(letter.keyCode == 90){
    if(awayactivated == false){
      selectbtn("teamaway","red");
      awayactivated=true;
      unselectbtn("teamhome","blue");
      homeactivated=false;
      teamselected="away";
      return;
    }else{
      unselectbtn("teamaway","red");
      awayactivated=false;
      teamselected=null;
      return;
    }
  }
});

function selectbtn(team,color){
  document.getElementById(team).style.backgroundColor=color;
  document.getElementById(team).style.color="white";
};

function unselectbtn(team,color){
  document.getElementById(team).style.backgroundColor="white";
  document.getElementById(team).style.color=color;
};

$("#pitchdiv").click(function(){
  if (teamselected==null) {
    console.log("Please select a team before clicking on pitch!");
    return;
  }else {
    console.log(teamselected);
    teamselected=null;
    homeactivated=false;
    awayactivated=false;
    unselectbtn("teamhome","blue");
    unselectbtn("teamaway","red");
  }
});
