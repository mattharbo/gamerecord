<?php
include '../functions/layout.php';
echo htmlheader("Javascript test", "../style/main.css");
?>

<style>

#mainmaxdiv{
  width: 100%;
  height: auto;
  margin: 0 auto;
  background-color: yellow;
}

#upperhoridiv{
  background-color: purple;
  height: 120px;
}

#fieldmaindiv {
    float: left;
    width: 810px;
    height: 545px;
    background-color: blue;
}

#eventtypediv {
    overflow: hidden;
    min-height: 50px;
    text-align: right;
    background-color: pink;
}

#eventtypemain{
  /*width: 100%;*/
  margin: 0 50px 10px 50px;
  height: 30px;
  background-color: red;
}

@media screen and (min-width: 1279px){

  #mainmaxdiv{
    width: 1280px;
    background-color: green;
  }

}

@media screen and (max-width: 799px){

  #fieldmaindiv {
      width: 100%;
      background-color: orange;
  }

  #eventtypediv {
      display: inline-block;
      width: 100%;
      margin-left: 0px;
  }

}

</style>


<div id="mainmaxdiv">
maxdiv

  <div id="upperhoridiv">upperhoridiv</div>

  <div id="fieldmaindiv">fieldmaindiv</div>
  <div id="eventtypediv">eventtypediv

    <div id="eventtypemain">event1</div>
    <div id="eventtypemain">event2</div>

  </div>

</div>


<?
echo htmlfooter();
?>
