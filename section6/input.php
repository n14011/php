<?php
require_once 'config.php';
print($twig->render('input.tpl',array('name'=>$_POST['name'], 'article'=>$_POST['article'])));
 ?>
