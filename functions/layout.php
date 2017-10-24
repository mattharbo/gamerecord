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

		<link rel="stylesheet" type="text/css" href="{$css}">
		<!-- <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" /> -->
		<link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700,800,900" rel="stylesheet">
<!-- <link rel="icon" href="./img/favicon.png"> -->
		<!-- <link rel="apple-touch-icon" sizes="120x120" href="../ressources/touch-icon-iphone.png"> -->

		<title>{$title} • Gamerecord</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">

	</head>
	<body>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5SVTSB7"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->
HTML;
}

function htmlfooter(){
return <<<HTML
		<!-- ### SCRIPTS ### -->
		<script type="text/javascript" src='./lib/maininterface.js'></script>
	</body>
</html>
HTML;
}

?>
