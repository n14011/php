<?php
class Post extends AppModel {
	public $validate = array(
		'img'=>array(
			'rule1' => array(
				//拡張子の指定
				'rule' => array('extension',array('jpg','jpeg','gif','png')),
				'message' => '画像ではありません。',
				'allowEmpty' => true,
			),
			'rule2' => array(
				//画像サイズの制限
				'rule' => array('fileSize', '<=', '500000'),
				'message' => '画像サイズは500KB以下でお願いします',
			)
		),
	);
}
