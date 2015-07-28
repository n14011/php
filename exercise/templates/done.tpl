<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>学生管理システム</title>
  <style>
    body{width:400px; margin: 0 auto;}
    h1{color:rgba(152, 104, 213, 0.86);font-size: 70px;}
    textarea{resize: none;font-size:20px;}
    h2{margin:5px;padding: 5px;}
  </style>
</head>
<body>
  <h1>投稿完了</h1>
  <h2>学籍番号</h2>
  <textarea name="id" rows="1" cols="6">{{id}}</textarea>
  <h2>名前</h2>
  <textarea name="name" rows="1" cols="10">{{name}}</textarea>
  <h2>学科名</h2>
  <textarea name="class" rows="1" cols="20">{{class}}</textarea>
  <h2>成績</h2>
   <textarea name="score" rows="1" cols="5">{{score}}</textarea>点

</body>
</html>
