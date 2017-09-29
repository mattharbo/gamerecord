<?php
include './functions/layout.php';
echo htmlheader("Dashboard", "./style/main.css");
?>

		<div id="header">
		    <div id="logo">
		    	logo
		    </div>

		    <div id="search">
		    	<input type="text" placeholder="Search" class="search-field"></input>
		    </div>


		    <div id="user">

		    	<div id="newbtn">
		    		<a href="#" class="submit_btn new_game_btn" onclick="openpopin('newgamepopin','prout1')">New Game</a>
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

		  		<a href="/scheduled" class="leftsidemenutooltip" title="Schedule">
		  			<span><li class="sidemenutopentry mainentry scheduled"></li></span>
		  		</a>
		  		<a href="/records" class="leftsidemenutooltip" title="Analyse">
		  			<span><li class="sidemenutopentry mainentry history"></li></span>
		  		</a>
		  		<a class="leftsidemenutooltip" title="Create">
		  			<span><li class="sidemenutopentry newgame" onclick="openpopin('newgamepopin','prout2')"></li></span>
		  		</a>
		  		<a href="settings" class="leftsidemenutooltip" title="Manage">
		  			<span><li class="sidemenutopentry mainentry settings"></li></span>
		  		</a>

		  	</ul>
		  	<!-- <ul id="sidemenuexpand">
		  		something on bottom of side bar
		  	</ul> -->
		  </div>

		  <div id="maincontent">

				<div id="listingcontent">

				  	<div id="contenttitlecontainer">
				  		<span class="contenttitle">Scheduled games</span>
				  	</div>

				  	<!-- #### Overdue game #### -->

				  	<div id="contentline" onclick="function and gameidhere">

				  		<div id="eventdate">
				  			<span class="overduedate overdue">Overdue</span>
				  		</div>

				  		<div id="eventdetails">
				  			<div id="eventleagueandco">
				  				<span class="leagueinfo overdue">Women European Championship 2017</span>
				  				<span class="journeyinfo">· Quater Final</span>
				  			</div>
				  			<div id="eventteams" class="overdue">
				  				France
				  				<span class="versusteam">vs.</span>
				  				England
				  			</div>
				  		</div>

				  		<div id="eventdeletioncontainer">
				  			<div id="eventdeletion" onclick="openpopin('smallpopin','gameidhere1')"></div>
				  		</div>

				  	</div>

				  	<!-- #### Scheduled game #### -->

				  	<div id="contentline" onclick="function and gameidhere">

				  		<div id="eventdate">
				  			<span class="month">AUG</span>
				  			<span class="date">12</span>
				  		</div>

				  		<div id="eventdetails">
				  			<div id="eventleagueandco">
				  				<span class="leagueinfo">UEFA Champions League</span>
				  				<span class="journeyinfo">· Journey 1</span>
				  			</div>
				  			<div id="eventteams">
				  				Paris Saint-Germain
				  				<span class="versusteam">vs.</span>
				  				Barcelona FC
				  			</div>
				  		</div>

				  		<div id="eventdeletioncontainer">
				  			<div id="eventdeletion" onclick="openpopin('smallpopin', 'gameidhere2')"></div>
				  		</div>

				  	</div>

				  	<!-- #### Overdue game #### -->

				  	<div id="contentline" onclick="function and gameidhere">

				  		<div id="eventdate">
				  			<span class="overduedate overdue">Overdue</span>
				  		</div>

				  		<div id="eventdetails">
				  			<div id="eventleagueandco">
				  				<span class="leagueinfo overdue">Fifa World Cup 1998</span>
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

				  	<!-- #### Countdown game #### -->

				  	<div id="contentline" onclick="function and gameidhere">

				  		<div id="eventdate">
				  			<span class="startsin">Starts in</span>
				  			<span class="startintime">2h 32min</span>
				  		</div>

				  		<div id="eventdetails">
				  			<div id="eventleagueandco">
				  				<span class="leagueinfo">UEFA Champions League</span>
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

		  		</div>

					<div id="testroundedcorner">
						testroundedcorner
					</div>

		   </div>


		</div>

		<div id="popinbackground">

			<div id="smallpopin">
				<div id="popintitle">
					<span class="popintitle">Delete this game?</span>
					<div id="closebtn" onclick="closepopin('smallpopin')"></div>
				</div>

				<div id="popincontent">
					Are you sure you want to delete this game?
				</div>

				<div id="popinoptions">
		    		<a class="cancel_btn option_btn" onclick="closepopin('smallpopin')">Cancel</a>
		    		<a class="delete_btn option_btn">Delete</a>
		    	</div>
			</div>

			<div id="newgamepopin">
				<div id="popintitle">
					<span class="popintitle">New game &#x1F389;</span>
					<div id="closebtn" onclick="closepopin('newgamepopin')"></div>
				</div>

				<div id="popincontent">
					MATCH CREATION FORM HERE!
				</div>

				<div id="popinoptions">

					<a class="submit_btn new_game_validation" onclick="">Create game</a>

		    		<!-- <a class="cancel_btn option_btn" onclick="closepopin('newgamepopin')">Cancel</a>
		    		<a class="delete_btn option_btn">Delete</a> -->
		    	</div>
			</div>
		<div>
<?
echo htmlfooter();
?>
