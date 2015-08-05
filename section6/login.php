<?php

session_start();
$errorMessage = "";
$viewUserId = htmlspecialchars($_POST["userid"], ENT_QUOTES);
$pass = MD5($_POST["password"]);
$pass1 = 'saokdao'.$id.'sasa';
$hash_password = hash('sha256',$pass1);
//if ($id == "ea703e7aa1efda0064eaa507d9e8ab7e" && $hash_password == "48af1bc486b9830278a4827a63d7b21f5a531ca7aaa06b466f176ad599587834"){
if ($viewUserId == "hoge" && $hash_password == "48af1bc486b9830278a4827a63d7b21f5a531ca7aaa06b466f176ad599587834"){
  //echo "ログインしました";
  //session_register_id(TRUE);
  $_SESSION["USERID"] = $_POST["userid"];
  header("location: input.php");
  exit;
}
else{
  $errorMessage = "ユーザIDあるいはパスワードに誤りがあります。";
  echo $errorMessage;
}

?>
