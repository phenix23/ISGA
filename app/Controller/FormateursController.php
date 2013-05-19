<?php
App::uses('AppController', 'Controller');
/**
 * Formateurs Controller
 *
 * @property Formateur $Formateur
 */
class FormateursController extends AppController {

/**
 * Helpers
 *
 * @var array
 */
	//public $helpers = array('N');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Formateur->recursive = 0;
		$this->set('formateurs', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->Formateur->id = $id;
		if (!$this->Formateur->exists()) {
			throw new NotFoundException(__('Invalid formateur'));
		}
		$this->set('formateur', $this->Formateur->read(null, $id));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Formateur->create();
			if ($this->Formateur->save($this->request->data)) {
				$this->Session->setFlash(__('The formateur has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The formateur could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->Formateur->id = $id;
		if (!$this->Formateur->exists()) {
			throw new NotFoundException(__('Invalid formateur'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Formateur->save($this->request->data)) {
				$this->Session->setFlash(__('The formateur has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The formateur could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Formateur->read(null, $id);
		}
	}

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Formateur->id = $id;
		if (!$this->Formateur->exists()) {
			throw new NotFoundException(__('Invalid formateur'));
		}
		if ($this->Formateur->delete()) {
			$this->Session->setFlash(__('Formateur deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Formateur was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->Formateur->recursive = 0;
		$this->set('formateurs', $this->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		$this->Formateur->id = $id;
		if (!$this->Formateur->exists()) {
			throw new NotFoundException(__('Invalid formateur'));
		}
		$this->set('formateur', $this->Formateur->read(null, $id));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Formateur->create();
			if ($this->Formateur->save($this->request->data)) {
				$this->Session->setFlash(__('The formateur has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The formateur could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		$this->Formateur->id = $id;
		if (!$this->Formateur->exists()) {
			throw new NotFoundException(__('Invalid formateur'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Formateur->save($this->request->data)) {
				$this->Session->setFlash(__('The formateur has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The formateur could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Formateur->read(null, $id);
		}
	}

/**
 * admin_delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Formateur->id = $id;
		if (!$this->Formateur->exists()) {
			throw new NotFoundException(__('Invalid formateur'));
		}
		if ($this->Formateur->delete()) {
			$this->Session->setFlash(__('Formateur deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Formateur was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
