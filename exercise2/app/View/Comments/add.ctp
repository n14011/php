<?php
echo $this->Form->create('Comment');
echo $this->Form->input('name',array('rows' => '1', 'label' => '作成者名'));
echo $this->Form->input('comment', array('rows' => '3'));
echo $this->Form->hidden('postid', array('value' => $post['Post']['id']));
echo $this->Form->end('Submit');
?>

