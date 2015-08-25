<p style="font-size:20px;float:right;"><?php echo $this->Html->link( '記事投稿', array('controller' => 'posts', 'action' => 'add'));?> </p>
<h1 style="font-size:40px">記事一覧</h1>
<table>
    <tr>
        <th>タイトル</th>
        <th>作成者</th>
        <th>Created</th>
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
    </tr>
    <?php endforeach; ?>
    <?php unset($post); ?>
</table>
