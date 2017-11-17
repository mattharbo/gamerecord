<?php
include '../../functions/usersession.php';
checksession();

include '../../functions/layout.php';
echo htmlheaderrecord("Game info", "../../style/record.css");
?>

  <div id="recordcontent">
    <!-- main content here -->

    <div id="gameinfocontainer">
      <div id="hometeamname" class="borderradiuslefttopbottom">
        PARIS ST-GERMAIN
      </div>
      <div id="hometeamscore">
        3
      </div>
      <div id="awayteamscore">
        1
      </div>
      <div id="awayteamname" class="borderradiusrighttopbottom">
        FC BARCELONA
      </div>
      <div id="halfandtime" class="borderradiusrighttopbottom">
        <div id="half">1st half</div>
        <div id="time">32:17</div>
      </div>
      <div id="homeindicator" class="indicator"></div>
      <div id="awayindicator" class="indicator"></div>
    </div>

    <div id="field" class="borderradiusrighttopbottom borderradiuslefttopbottom">
      field here
    </div>

  </div>

<?
echo htmlfooterrecord();
?>
