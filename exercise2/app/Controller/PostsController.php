<?php
class PostsController extends AppController {
	var $uses = array('Post','Comment');
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');

	public function index() {
		$this->set('posts', $this->Post->find('all'));
	}


	public function view($id = null) {
		$this->set('comments', $this->Comment->findAllByPostid($id));
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}
		$post = $this->Post->findById($id);
		if (!$post) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->set('post', $post);

		if ($this->request->is('post')){
			$this->Comment->create();
			if($this->Comment->save($this->request->data)){
				$this->Session->setFlash(__('コメント登録しました。'));
				return $this->redirect(array('action'=>'view/'. $id));
			}
			$this->Session->setFlash(__('コメント登録できませんでした。'));
		}

	}
	public function add(){
		if ($this->request->is('post')){
			$this->Post->create();
			if($this->Post->save($this->request->data)){
				$path = IMAGES;
				$img = $this->request->data['Post']['img'];
				$this->Session->setFlash(__('登録しました。'));
				$id = $this->Post->getLastInsertID();
				move_uploaded_file($img['tmp_name'], $path . DS .$id . $img['name'] );
				$data = array(
					'Post' => array(
						'images' => $img['name']));
				$this->Post->save($data);
				return $this->redirect(array('action'=>'index'));
			}
			$this->Session->setFlash(__('登録できませんでした。'));
		}
	}
	public function edit($id = null) {
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}

		$post = $this->Post->findById($id);
		if (!$post) {
			throw new NotFoundException(__('Invalid post'));
		}

		if ($this->request->is(array('post', 'put'))) {
			$this->Post->id = $id;
			if ($this->Post->save($this->request->data)) {
				$this->Session->setFlash(__('Your post has been updated.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to update your post.'));
		}

		if (!$this->request->data) {
			$this->request->data = $post;
		}
	}
	public function delete(){
		if($this->request->is('post')){
			$this->Post->create();
			$pass = $this->request->data['Post']['password'];
			$id = $this->request->data['Post']['id'];

			if($pass == $this->request->data['Post']['pass']){
				if($this->Post->delete($id)){
					$this->Session->setFlash(__('id: %s を削除しました',($id)));
				}
				$this->redirect(array('controller'=>'posts','action'=>'index'));
			}else{
				$this->Session->setFlash(__('パスワードを確認してください'));
				$this->redirect(array('controller'=>'posts','action'=>'view',$id));
			}
		}
	}

}
