
<?php
session_start();
$conn = mysqli_connect("localhost", "root", "", "loginnregister");

// IF
if(isset($_POST["action"])){
  if($_POST["action"] == "register"){
    register();
  }
  else if($_POST["action"] == "login"){
    login();
  }
}

// REGISTER
function register(){
  global $conn;

  $name = $_POST["name"];
  $username = $_POST["username"];
  $password = $_POST["password"];

  if(empty($name) || empty($username) || empty($password)){
    echo "Lütfen Formu Tam Doldurunuz!";
    exit;
  }

  $user = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");
  if(mysqli_num_rows($user) > 0){
    echo "Bu Kullanıcı İsmi Zaten Alınmış";
    exit;
  }

  $query = "INSERT INTO tb_user VALUES('', '$name', '$username', '$password')";
  mysqli_query($conn, $query);
  echo "Kaydolma Başarılı!";
}

// LOGIN
function login(){
  global $conn;

  $username = $_POST["username"];
  $password = $_POST["password"];

  $user = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username'");

  if(mysqli_num_rows($user) > 0){

    $row = mysqli_fetch_assoc($user);

    if($password == $row['password']){
      echo "Oturum Açma Başarılı ;)";
      $_SESSION["login"] = true;
      $_SESSION["id"] = $row["id"];
    }
    else{
      echo "Yanlış Şifre :(";
      exit;
    }
  }
  else{
    echo "Kullanıcı Kayıtlı Değil :(";
    exit;
  }
}
?>