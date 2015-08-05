<?php
session_start();

if($_SESSION["USERID"]){
  require_once 'config.php';
  print($twig->render('input.tpl',array('name'=>$_POST['name'], 'article'=>$_POST['article'])));
}else{
  header("Location: index.php");
}
// require_once 'config.php';
// print($twig->render('input.tpl',array('name'=>$_POST['name'], 'article'=>$_POST['article'])));
 ?>
