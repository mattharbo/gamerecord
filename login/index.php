<?php
  // Definition des constantes et variables
  define('USERLOGIN','toto');
  define('USERPASSWORD','tata');
  $errorMessage = '';
 
  // Test de l'envoi du formulaire
  if(!empty($_POST)) 
  {
    // Les identifiants sont transmis ?
    if(!empty($_POST['login']) && !empty($_POST['password'])) 
    {
      // Sont-ils les mêmes que les constantes ?
      if($_POST['login'] !== USERLOGIN) 
      {
        $errorMessage = 'Mauvais login !';
      }
        elseif($_POST['password'] !== USERPASSWORD) 
      {  
        $errorMessage = 'Mauvais password !';
      }
        else
      {
        // On ouvre la session
        session_start();

        // On enregistre le login en session
        $_SESSION['login'] = USERLOGIN;
        // On redirige vers le fichier admin.php
        header('Location: ../');
        exit();
      }
    }
      else
    {
      $errorMessage = 'Veuillez inscrire vos identifiants svp !';
    }
  }
?>

<html lang="en">
	<head>
		<title>Staper | Login</title>
		
        <link rel="stylesheet" href="../style/main.css">
        <link rel="stylesheet" href="../style/login.css">
        <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/themes/base/minified/jquery-ui.min.css" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,600,700,800,900" rel="stylesheet">
		<!-- <link rel="icon" href="./img/favicon.png"> -->
        <!-- <link rel="apple-touch-icon" sizes="120x120" href="../ressources/touch-icon-iphone.png"> -->

		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
		
	</head>
	<body class="loginbody">

		<div id="login" class="loginlogo">

			<div id="loginform">

				 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
			        <?php
			          // Rencontre-t-on une erreur ?
			          if(!empty($errorMessage)) 
			          {
			            echo '<p>', htmlspecialchars($errorMessage) ,'</p>';
			          }
			        ?>
			       
			          Login :
			          <input type="text" name="login" id="login2" value="" />
			          <br>
			          Password :
			          <input type="password" name="password" id="password" value="" /> 
			          <input type="submit" name="submit" value="Se logguer" />
			       
			    </form>

			</div>

		</div>

	</body>
</html>