<?

function login(){
  // On définit un login et un mot de passe de base pour tester notre exemple. Cependant, vous pouvez très bien interroger votre base de données afin de savoir si le visiteur qui se connecte est bien membre de votre site
  $login_valide = "matt";
  $pwd_valide = "harbo";

  // on teste si nos variables sont définies
  if (isset($_POST['login']) && isset($_POST['pwd'])) {

  	// on vérifie les informations du formulaire, à savoir si le pseudo saisi est bien un pseudo autorisé, de même pour le mot de passe
  	if ($login_valide == $_POST['login'] && $pwd_valide == $_POST['pwd']) {
  		// dans ce cas, tout est ok, on peut démarrer notre session

  		// on la démarre :)
  		session_start ();
  		// on enregistre les paramètres de notre visiteur comme variables de session ($login et $pwd) (notez bien que l'on utilise pas le $ pour enregistrer ces variables)
  		$_SESSION['login'] = $_POST['login'];
  		$_SESSION['pwd'] = $_POST['pwd'];

  		// on redirige notre visiteur vers une page de notre section membre
  		header ('location: ./dashboard.php');
      // header ('location: ./dashboard.php');
  	}
  	else {
  		// Le visiteur n'a pas été reconnu comme étant membre de notre site. On utilise alors un petit javascript lui signalant ce fait
  		// echo '<body onLoad="alert(\'Membre non reconnu...\')">';
      echo "Login issue";
  	}
  }
}

function checksession(){
  // On démarre la session (ceci est indispensable dans toutes les pages de notre section membre)
  session_start ();

  // Si pas de variables de session alors on redirige vers le formulaire de connexion
  if (!isset($_SESSION['login']) && !isset($_SESSION['pwd'])) {
    header ('location: ./');
    // header ('location: ../sessiontest/index.php');
  }
}

function logout(){
  // On démarre la session
  session_start ();
  // On détruit les variables de notre session
  session_unset ();
  // On détruit notre session
  session_destroy ();
  // On redirige le visiteur vers la page d'accueil
  header ('location: ../');
}

?>
