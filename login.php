
<?php
require 'function.php';
if(isset($_SESSION["id"])){
  header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Oturum Aç</title>
  </head>
  <body>
    <h2>Oturum Aç</h2>
    <form autocomplete="off" action="" method="post">
      <input type="hidden" id="action" value="login">
      <label for="">Kullanıcı Adı</label>
      <input type="text" id="username" value=""> <br>
      <label for="">Şifre</label>
      <input type="password" id="password" value=""> <br>
      <button type="button" onclick="submitData();">Oturum Aç</button>
    </form>
    <br>
    <a href="register.php">Kaydola Git</a>
    <?php require 'script.php'; ?>
  </body>
</html>