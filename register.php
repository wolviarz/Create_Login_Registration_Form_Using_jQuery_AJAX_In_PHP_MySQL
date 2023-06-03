
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
    <title>Register</title>
  </head>
  <body>
    <h2>Kaydol</h2>
    <form autocomplete="off" action="" method="post">
      <input type="hidden" id="action" value="register">
      <label for="">Ad</label>
      <input type="text" id="name" value=""> <br>
      <label for="">Kullanıcı Adı</label>
      <input type="text" id="username" value=""> <br>
      <label for="">Şifre</label>
      <input type="password" id="password" value=""> <br>
      <button type="button" onclick="submitData();">Kaydol</button>
    </form>
    <br>
    <a href="login.php">Oturum Açmaya Git</a>
    <?php require 'script.php'; ?>
  </body>
</html>