<p style="font-size:20px;float:right;"><?php echo $this->Html->link( '記事一覧へ', array('controller' => 'posts', 'action' => 'index'));?> </p>
<h1 style="font-size:40px">投稿</h1>
<?php
	echo $this->Form->create('Post', array('type'=>'file', 'enctype' => 'multipart/form-data'));
	echo $this->Form->file('Post.img', array('label' => false, 'type' => 'file', 'multiple', ));
	echo $this->Form->input('title',array('rows' => '3', 'label' => 'タイトル'));
	echo $this->Form->input('name' ,array('rows' => '1', 'label' => '作成者名'));
	echo $this->Form->input('comment', array('label' => 'コメント'));
	echo $this->Form->input('password',array('label' => '削除用のパスワード'));
	echo $this->Form->submit('アップロード');
	echo $this->Form->end();
