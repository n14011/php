<?php
session_start();

if (isset($_SESSION["USERID"])) {
  echo $errorMessage = "ログアウトしました。";
}
else {
  echo $errorMessage = "セッションがタイムアウトしました。";
}
// セッション変数のクリア
$_SESSION = array();
// クッキーの破棄
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}
// セッションクリア
@session_destroy();
?>
