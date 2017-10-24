<?php
include '../functions/layout.php';
echo htmlheader("Javascript test", "../style/main.css");
?>

<style>

.teamcell{
  width: 140px;
  height: 20px;
  padding-left: 10px;
  line-height: 19px;
  border: 1px solid #dcdcdc;
  margin-bottom: -1px;
  font-size: 10px;
}

.titlecell{
  background-color: white;
  text-align: center;
  padding-left: 0px;
  width: 150px;
}

.playercell{
  color:#a7a7a7;
}

.subcell{
  background-color: #dcdcdc;
}

.newcell{
  background-color: white;
  text-align: center;
  padding-left: 0px;
  width: 150px;
  cursor: pointer;
}

.cellinput{
  background-color: #dcdcdc;
  width: 152px;
  height: 22px;
  font-weight: bold;
  font-size: 10px;
  border: 1px solid #dcdcdc;
  padding-left: 10px;
  line-height: 19px;
  margin-bottom: -1px;
}

</style>

Beware to the edition mode boolean!
<button onclick="seteditionmode();">Switch mode</button><br><br>

<ul id="hometeamplayerlisting">
  <li class="teamcell titlecell">Team A</li>

  <?
  for ($i=1; $i <= 11 ; $i++) {
    echo "<li class='teamcell playercell'>Player ".$i."</li>";
  }
  ?>

  <li class="teamcell newcell" id="addplayer">Add a player</li>
</ul>

<script type="text/javascript" src='./lib/teamlisting.js'></script>

<?
echo htmlfooter();
?>
