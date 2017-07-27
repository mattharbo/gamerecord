<html lang="en">
	<head>
		<title>Staper | Record and manage your game stats</title>
		
        <link rel="stylesheet" href="./style/main.css">
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700,800,900" rel="stylesheet">
		<!-- <link rel="icon" href="./img/favicon.png"> -->
        <!-- <link rel="apple-touch-icon" sizes="120x120" href="../ressources/touch-icon-iphone.png"> -->

		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
		
	</head>
	<body>
		
		<div id="header">
		    <div id="logo">
		    	logo
		    </div>
		    
		    <div id="search">
		    	<input type="text" placeholder="Search" class="search-field"></input>
		    </div>
		    
		    
		    <div id="user">

		    	<div id="newbtn">
		    		<a href="#" class="submit_btn new_game_btn">New Game</a>
		    	</div>

		    	<div id="account">
					<span class="first">Matthieu Harbonnier</span>
					<img src="./ressources/profile_pic.png" class="profile_pic">
				</div>

		    </div>
		</div>

		<div id="content">
		  <div id="sidemenu">
		  	<ul>
		  		<li class="sidemenutopentry mainentry scheduled" onclick="openLeftMenu()">scheduled</li>
		  		<li class="sidemenutopentry mainentry history" onclick="openLeftMenu()">history</li>
		  		<li class="sidemenutopentry mainentry settings" onclick="openLeftMenu()">settings</li>
		  		<li class="sidemenutopentry newgame" onclick="openLeftMenu()">newgame</li>
		  	</ul>
		  	<ul id="sidemenuexpand" onclick="openLeftMenu()">
		  		<li id="sidemenubottomentry" class="sidemenubottomentry">expand</li>
		  	</ul>
		  </div>

		  <div id="maincontent">

				<div id="listingcontent">		  	

				  	<div id="contenttitlecontainer">
				  		<span class="contenttitle">Scheduled games</span>
				  	</div>

				  	<!-- #### Scheduled game #### -->

				  	<div id="contentline">

				  		<div id="eventdate">
				  			<span class="month">AUG</span>
				  			<span class="date">12</span>
				  		</div>

				  		<div id="eventdetails">
				  			<div id="eventleagueandco">
				  				<span class="laegueinfo">UEFA Champions League</span>
				  				<span class="journeyinfo">· Journey 1</span>
				  			</div>
				  			<div id="eventteams">
				  				Paris Saint-Germain 
				  				<span class="versusteam">vs.</span>
				  				Barcelona FC
				  			</div>
				  		</div>

				  		<div id="eventdeletioncontainer">
				  			<div id="eventdeletion"></div>
				  		</div>

				  	</div>

				  	<!-- #### Overdue game #### -->

				  	<div id="contentline">

				  		<div id="eventdate">
				  			<span class="overduedate overdue">Overdue</span>
				  		</div>

				  		<div id="eventdetails">
				  			<div id="eventleagueandco">
				  				<span class="laegueinfo overdue">Fifa World Cup 1998</span>
				  				<span class="journeyinfo">· Final</span>
				  			</div>
				  			<div id="eventteams" class="overdue">
				  				France 
				  				<span class="versusteam">vs.</span>
				  				Brazil
				  			</div>
				  		</div>

				  		<div id="eventdeletioncontainer">
				  			<div id="eventdeletion"></div>
				  		</div>

				  	</div>

				  	<div id="contentline">
				  	</div>

				  	<div id="contentline">
				  	</div>

		  		</div>
		    
		   </div>
		</div>

		<!-- ### SCRIPTS ### -->
		<script type="text/javascript" src='./lib/maininterface.js'></script>

	</body>
</html>