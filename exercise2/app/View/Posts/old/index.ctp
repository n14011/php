<h1>Blog posts</h1>
<table>
    <tr>
        <th>Title</th>
        <th>name</th>
        <th>Created</th>
				<th>add</th>
    </tr>

    <!-- ここから、$posts配列をループして、投稿記事の情報を表示 -->

    <?php foreach ($posts as $post): ?>
    <tr>
        <td>
            <?php echo $this->Html->link($post['Post']['title'],
							array('controller' => 'posts', 'action' => 'view', $post['Post']['id'])); ?>
        </td>
        <td><?php echo $post['Post']['name']; ?></td>
        <td><?php echo $post['Post']['created']; ?></td>
				<td>
					<?php echo $this->Html->link(
							'Add Post',
							array('controller' => 'posts', 'action' => 'add'));?>
				</td>
				 <td>
            <?php echo $this->Form->postLink(
                'Delete',
                array('action' => 'delete', $post['Post']['id']),
                #array('confirm' => 'Are you sure?'));
                array('confirm' => $post['Post']['password']));
            ?>
				 </td>
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>
