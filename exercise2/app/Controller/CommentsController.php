<?php
class CommentsController extends AppController {
	#var $uses = array('Comment');
	public $helpers = array('Html', 'Form', 'Session');
	public $components = array('Session');

	public function index() {
		$this->set('comments', $this->Comment->find('all'));
	}
	public function view($id = null) {
		#$this->set('comments', $this->Comment->find('all'));
		if (!$id) {
			throw new NotFoundException(__('Invalid post'));
		}
		$comment = $this->Comment->findById($id);
		if (!$comment) {
			throw new NotFoundException(__('Invalid post'));
		}
		$this->set('comment', $comment);
	}
	public function add() {
		if ($this->request->is('post')) {
			$this->Comment->create();
			if ($this->Comment->save($this->request->data)) {
				$this->Session->setFlash(__('Your post has been saved.'));
				return $this->redirect(array('action' => 'index'));
			}
			$this->Session->setFlash(__('Unable to add your post.'));
		}
	}

}
