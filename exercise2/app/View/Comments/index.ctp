<table>
 <tr>
  <th>id</th>
  <th>コメント</th>
  <th>コメント作成者</th>
  <th>作成日時</th>
 </tr>
 <tr>
  <?php foreach ($comments as $comment): ?>
 <td> <?php echo $this->Html->link($comment['Comment']['id'],array('controller' => 'comments', 'action' => 'view', $comment['Comment']['id'])); ?></td>
 <td><?php echo $comment['Comment']['comment']; ?></td>
 <td><?php echo $comment['Comment']['name']; ?> </td>
 <td><?php echo $comment['Comment']['created']; ?> </td>
 <td><?php echo $this->Html->link(
	     'Add Post',
			     array('controller' => 'comments', 'action' => 'add')
				 ); ?></td>
 </tr>
  <?php endforeach; ?>
  <?php unset($comment); ?>

</table>

