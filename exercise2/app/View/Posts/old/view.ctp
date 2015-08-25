	<h1>タイトル:<?php echo h($post['Post']['title']); ?></h1>
	<p>作成者:<?php echo h($post['Post']['name']); ?></p>
	<p><small>Created: <?php echo $post['Post']['created']; ?></small></p>
	<img src="../../app/webroot/img/<?php echo ($post['Post']['images']); ?>">
	<p>作成者コメント:<?php echo h($post['Post']['comment']); ?></p>


<?php
	echo $this->Form->create('Post');
	echo $this->Form->input('comment',array('rows' => '3','label' => 'コメント'));
	echo $this->Form->input('name', array('label' => 'コメント者名'));
	echo $this->Form->submit('コメント送信');
	echo $this->Form->end();
?>
<table>
	<tr>
		<th>id</th>
		<th>コメント</th>
		<th>コメント作成者</th>
		<th>作成日時</th>
	</tr>
	<tr>
  <?php foreach ($posts as $post): ?>
	<td><?php echo $post['Post']['id']; ?></td>
	<td><?php echo $post['Post']['comment']; ?></td>
	<td><?php echo $post['Post']['name']; ?> </td>
	<td><?php echo $post['Post']['created']; ?> </td>
	</tr>
  <?php endforeach; ?>
  <?php unset($post); ?>

</table>

