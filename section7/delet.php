<?php
require_once 'twig.php';
require_once 'Blog.php';
$blog = new Blog();
$data = $blog->removeArticle($_GET['id']);
$data1 = $blog->getArticles();
// Twigにはめこむ
// templatesディレクトリにある *output.tpl* の {{article}}と{{name}}と{{create_date}}に受け取ったデータを嵌め込んで表示する
echo "削除しました";
