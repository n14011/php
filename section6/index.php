<?php
require_once 'config1.php';
rint($twig->render('login.tpl',array('name'=>$_POST['userid'], 'article'=>$_POST['password'])));
 ?>
