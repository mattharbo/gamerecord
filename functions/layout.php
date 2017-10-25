<?

function htmlheader($title, $css){
return <<<HTML
<html lang="en">
	<head>
		<!-- Google Tag Manager -->
		<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
		new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
		j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
		'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
		})(window,document,'script','dataLayer','GTM-5SVTSB7');</script>
		<!-- End Google Tag Manager -->

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="../lib/sammy.js" type="text/javascript" charset="utf-8"></script>
		<script src="../lib/spa.js" type="text/javascript" charset="utf-8"></script>

		<link rel="stylesheet" type="text/css" href="{$css}">
		<!-- <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" /> -->
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700,800,900" rel="stylesheet">
		<link rel="icon" href="../ressources/favicon.png">
		<!-- <link rel="apple-touch-icon" sizes="120x120" href="../ressources/touch-icon-iphone.png"> -->

		<title>Gamerecord | {$title}</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

	</head>
	<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5SVTSB7"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
HTML;
}

function appheader(){
return <<<HTML
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
				<img src="../ressources/profile_pic.png" class="profile_pic">
			</div>

			</div>
	</div>
HTML;
}

function appleftmenu(){
return <<<HTML
<div id="content">
	<div id="sidemenu">
		<ul>

			<a href="#/scheduled/" class="leftsidemenutooltip" title="Schedule">
				<span><li class="sidemenutopentry mainentry scheduled"></li></span>
			</a>
			<a href="#/analyse/" class="leftsidemenutooltip" title="Analyse">
				<span><li class="sidemenutopentry mainentry history"></li></span>
			</a>
			<a class="leftsidemenutooltip" title="Create">
				<span><li class="sidemenutopentry newgame" onclick="openpopin('newgamepopin','prout2')"></li></span>
			</a>
			<a href="../logout/" class="leftsidemenutooltip" title="Manage">
				<span><li class="sidemenutopentry mainentry settings"></li></span>
			</a>

		</ul>
		<!-- <ul id="sidemenuexpand">
			something on bottom of side bar
		</ul> -->
	</div>
HTML;
}

function htmlfooter(){
return <<<HTML
		<!-- ### SCRIPTS ### -->
		<script type="text/javascript" src='../lib/maininterface.js'></script>
	</body>
</html>
HTML;
}

?>
