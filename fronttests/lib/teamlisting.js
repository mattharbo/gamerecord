var editionmode = true;

$('body').on('click', '.playercell', function(){

  if (editionmode == true) {

    var $el = $(this); //Definition de la variable

    var $input = $('<input class="cellinput" />').val($el.text()); //Recuperation du contenu initial

    $el.replaceWith( $input );

    var save = function(){
      var $p = $('<li class="teamcell playercell" />').text( $input.val() );
      $input.replaceWith( $p );
    };

    $input.one('blur', save).focus();

}

});

$('body').on('click', '.newcell', function(){

  if (editionmode == true) {

    var li = document.createElement("li");
    li.className = "teamcell playercell subcell";
    var node = document.createTextNode("Substitute");

    li.appendChild(node);

    var parentelement = document.getElementById("hometeamplayerlisting");
    var child = document.getElementById("addplayer");

    parentelement.insertBefore(li, child);

  }

});

function seteditionmode(){
  if (editionmode == true) {
    editionmode = false;
    document.getElementById('addplayer').style.display = "none";
  }else {
    editionmode = true;
    document.getElementById('addplayer').style.display = "block";
  }

}
