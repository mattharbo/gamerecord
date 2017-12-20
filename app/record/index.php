<?php
include '../../functions/usersession.php';
checksession();

include '../../functions/layout.php';
echo htmlheaderrecord("Game info", "../../style/record.css");
?>

<div id="rightSideNavigation" class="rightsidenav">
  Hello Martin & Marius!

  <div onclick="closeNav()">Close the nav</div>

</div>


<div id="mainmaxdiv">

  <div id="recordheader">
    <div id="quitrecordbtn"></div>
  </div><!--Recordheader -->

  <div id="upperhoridiv">

    <div id="gameinfocontainer">
      <div id="hometeamname" onclick="openNav()">
        Paris Saint-Germain
      </div>
      <div id="hometeamscore">
        3
      </div>
      <div id="awayteamscore">
        1
      </div>
      <div id="awayteamname">
        FC Barcelona
      </div>
      <div id="halfandtime">
        <div id="half">1st half</div>
        <div id="time">32:17</div>
      </div>
      <div id="homeindicator" class="indicator"></div>
      <div id="awayindicator" class="indicator"></div>
    </div>

  </div>

    <div id="fieldmaindiv">
      <div id="fielddiv">
        field here
      </div>
    </div>

    <div id="eventtypediv">

      <div id="eventtypemain">
        <div id='eventtypehomenumber'>32</div>
        <div id='eventtypedesc'>Turnover(s)</div>
        <div id='eventtypeawaynumber'>1</div>
      </div>

      <div id="eventtypemain">
        <div id='eventtypehomenumber'>0</div>
        <div id='eventtypedesc'>Shoot(s)</div>
        <div id='eventtypeawaynumber'>17</div>
      </div>

      <div id="eventtypemain">
        <div id='eventtypehomenumber'>32</div>
        <div id='eventtypedesc'>Crosse(s)</div>
        <div id='eventtypeawaynumber'>1</div>
      </div>

      <div id="eventtypemain">
        <div id='eventtypehomenumber'>32</div>
        <div id='eventtypedesc'>Foul(s)</div>
        <div id='eventtypeawaynumber'>1</div>
      </div>

      <div id="eventtypemain">
        <div id='eventtypehomenumber'>32</div>
        <div id='eventtypedesc'>Card(s)</div>
        <div id='eventtypeawaynumber'>1</div>
      </div>

      <div id="eventtypemain">
        <div id='eventtypehomenumber'>0</div>
        <div id='eventtypedesc'>Corner kick(s)</div>
        <div id='eventtypeawaynumber'>17</div>
      </div>

      <div id="eventtypemain">
        <div id='eventtypehomenumber'>0</div>
        <div id='eventtypedesc'>Offside(s)</div>
        <div id='eventtypeawaynumber'>17</div>
      </div>

      <div id="poweredby"><span class="lightfont">Powered by</span> Airscout</span>

    </div>

</div>

<?
echo htmlfooterrecord();
?>
