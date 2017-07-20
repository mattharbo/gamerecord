<html lang="en">
	<head>
		<title>Gamerecord • Record and manage your game stats</title>
		
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
		  		<li class="sidemenutopentry mainentry scheduled">scheduled</li>
		  		<li class="sidemenutopentry mainentry history">history</li>
		  		<li class="sidemenutopentry mainentry settings">settings</li>
		  		<li class="sidemenutopentry newgame">newgame</li>
		  	</ul>
		  	<ul id="sidemenuexpand">
		  		<li class="sidemenubottomentry">expand</li>
		  	</ul>
		  </div>

		  <div id="maincontent">

		  	<?php

		  		for ($i=1; $i <= 132; $i++) {
		  			if ($i!=32) {
		  				echo $i." line content<br>";
		  			}else{
		  				echo $i." line content &#128076;<br>";
		  			}
		  		}
		  	?>
		    
		   </div>
		</div>

	</body>
</html>