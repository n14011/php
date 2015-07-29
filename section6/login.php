<?php

session_start();
$errorMessage = "";
$viewUserId = htmlspecialchars($_POST["userid"], ENT_QUOTES);
if ($_POST["userid"] == "hoge" && $_POST["password"] == "hoge"){
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
