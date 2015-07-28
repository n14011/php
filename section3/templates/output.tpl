<!DOCTYPE html>
<html>
  <head>
    <meta name="charset" content="UTF-8">
    <title>ロバのみみblog 表示画面</title>
    <style>
    body{width: 600px; margin: 0 auto;}
    h1 {font-size: 50px;color: rgb(142, 189, 78);}
    .user > h2{float:left;margin:0px;padding:0px;margin-right:50px;}
    .user > textarea{resize: none;   }
    </style>
  </head>
  <body>
    <h1>ロバのみみblog 表示画面</h1>
    <div class="user">
    <h2>投稿者</h2>
    <textarea name="name" cols="20" rows="1">{{name}}</textarea>
    </div>
    <h2>本文</h2>
      <textarea name="text" rows="15" cols="70">{{article}}</textarea>
  </body>
</html>
