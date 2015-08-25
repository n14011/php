<p style="font-size:20px;float:right;"><?php echo $this->Html->link( '記事一覧へ', array('controller' => 'posts', 'action' => 'index'));?> </p>
<h1 style="font-size:40px">編集</h1>
<?php
echo $this->Form->create('Post');
echo $this->Form->input('title',array('rows' => '1'));
echo $this->Form->input('name',array('rows' => '1'));
echo $this->Form->input('comment', array('rows' => '3'));
echo $this->Form->end('Save Post');
?>
