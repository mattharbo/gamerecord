<?php
include '../functions/layout.php';
echo htmlheader("Javascript test", "../style/main.css");
?>

<style>
  #teamhome{
    width: 100px;
    height: 50px;
    text-align: center;
    line-height: 50px;
    border: 1px solid blue;
    border-radius: 5px;
    color:blue;
    display: inline-block;
  }

  .teamhome_unselected{
    background-color: white;
  }

  #teamhome:hover, #teamaway:hover{
    background-color: rgba(136, 136, 136, 0.21);
  }
  #teamaway{
    width: 100px;
    height: 50px;
    text-align: center;
    border-radius: 5px;
    line-height: 50px;
    border: 1px solid red;
    color:red;
    display: inline-block;
  }

  #pitchdiv{
    width: 500px;
    height: 250px;
    line-height: 250px;
    text-align: center;
    background-color: green;
  }
</style>

<div id="teamhome">Press A</div>
<div id="teamaway">Press Z</div>

<div id="pitchdiv">
  pitch is here
</div>

<script type="text/javascript" src='./lib/teamsidewithkeyboard.js'></script>

<?
echo htmlfooter();
?>
