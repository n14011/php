<h1>Add Post</h1>
<?php
	echo $this->Form->create('Post', array('type'=>'file', 'enctype' => 'multipart/form-data'));
	echo $this->Form->input('Post.img', array('label' => false, 'type' => 'file', 'multiple'));
	#echo $this->Form->file('image');
	#echo $this->Form->input('images');
	echo $this->Form->input('images', array('rows' => '1', 'label' => '画像の名前と拡張子まで書いて下さい (例　abc.jpg)'));
	echo $this->Form->input('title',array('rows' => '3', 'label' => 'タイトル'));
	echo $this->Form->input('name' ,array('rows' => '1', 'label' => '作成者名'));
	echo $this->Form->input('comment', array('label' => 'コメント'));
	echo $this->Form->input('password',array('label' => '削除用のパスワード'));
	echo $this->Form->submit('アップロード');
	echo $this->Form->end();
