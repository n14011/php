	<p style="font-size:20px; float:right;"><?php echo $this->Html->link( '記事一覧へ', array('controller' => 'posts', 'action' => 'index'));?> </p>
	<h1 style="font-size:40px">投稿記事</h1>
	<h1 style="font-size:25px " >タイトル:<?php echo h($post['Post']['title']); ?></h1>
	<img src="../../app/webroot/img/<?php echo ($post['Post']['images']); ?>">
	<p style="font-size:20px">作成者:<?php echo h($post['Post']['name']); ?></p>
	<p style="font-size:20px"><small>作成日: <?php echo $post['Post']['created']; ?></small></p>
	<p style="font-size:20px" >作成者コメント:<?php echo h($post['Post']['comment']); ?></p>
<br>
<br>

<?php
	echo $this->Form->create('Comment');
	echo $this->Form->input('comment',array('rows' => '3','label' => 'コメント'));
	echo $this->Form->input('name', array('label' => 'コメント者名'));
	echo $this->Form->hidden('postid', array('value' => $post['Post']['id']));
	echo $this->Form->submit('コメント送信');
	echo $this->Form->end();
?>

<table>
 <tr>
  <th>コメント</th>
  <th>コメント作成者</th>
  <th>作成日時</th>
 </tr>
 <tr>
<?php foreach ($comments as $Comment): ?>
 <td><?php echo $Comment['Comment']['comment']; ?></td>
 <td><?php echo $Comment['Comment']['name']; ?> </td>
 <td><?php echo $Comment['Comment']['created']; ?> </td>
 </tr>
<?php endforeach; ?>
<?php unset($Comment); ?>

</table>
<br>
<br>
<hr>

<?php
echo $this->Form->create('Post',array('action'=>'delete'));
echo $this->Form->input('pass',array('type'=>'password','label' => '削除用パスワード'));
echo $this->Form->input('password',array('type'=>'hidden','value'=>$post['Post']['password']));
echo $this->Form->input('id',array('type'=>'hidden','value'=>$post['Post']['id']));
echo $this->Form->end('記事削除');

