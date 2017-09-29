<?php
include './functions/usersession.php';
login();

include './functions/layout.php';
echo htmlheader("Login", "./style/main.css");
?>

  <form action="./" method="post">
  Login : <input type="text" name="login">
  <br />

  Password : <input type="password" name="pwd"><br />
  <input type="submit" value="Connexion">
  </form>

  <?
  echo htmlfooter();
  ?>
