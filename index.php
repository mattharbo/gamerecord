<?php
include './functions/usersession.php';
login();
?>

<html>
<head>
<title>Login form</title>
</head>

<body>

  <form action="./" method="post">
  Login : <input type="text" name="login">
  <br />

  Password : <input type="password" name="pwd"><br />
  <input type="submit" value="Connexion">
  </form>

</body>
</html>
