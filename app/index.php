<?php
include '../functions/usersession.php';
checksession();

include '../functions/layout.php';
echo htmlheader("Matthieu Harbonnier", "../style/main.css");
echo appheader();
echo appleftmenu();
?>

		<div id="maincontent">
			<!-- main content here -->
		</div>


		</div><!-- End of "content" popin (see layout.php > appleftmenu function) -->

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
