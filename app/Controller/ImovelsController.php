<?php
App::uses('AppController', 'Controller');
/**
 * Imovels Controller
 *
 * @property Imovel $Imovel
 */
class ImovelsController extends AppController {

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Imovel->recursive = 0;
		$this->set('imovels', $this->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Imovel->exists($id)) {
			throw new NotFoundException(__('Invalid imovel'));
		}
		$options = array('conditions' => array('Imovel.' . $this->Imovel->primaryKey => $id));
		$this->set('imovel', $this->Imovel->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Imovel->create();
			if ($this->Imovel->save($this->request->data)) {
				$this->Session->setFlash(__('The imovel has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The imovel could not be saved. Please, try again.'));
			}
		}
		$users = $this->Imovel->User->find('list');
		$tipos = $this->Imovel->Tipo->find('list');
		$categorias = $this->Imovel->Categorium->find('list');
		$contratos = $this->Imovel->Contrato->find('list');
		$this->set(compact('users', 'tipos', 'categorias', 'contratos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Imovel->exists($id)) {
			throw new NotFoundException(__('Invalid imovel'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Imovel->save($this->request->data)) {
				$this->Session->setFlash(__('The imovel has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The imovel could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Imovel.' . $this->Imovel->primaryKey => $id));
			$this->request->data = $this->Imovel->find('first', $options);
		}
		$users = $this->Imovel->User->find('list');
		$tipos = $this->Imovel->Tipo->find('list');
		$categorias = $this->Imovel->Categorium->find('list');
		$contratos = $this->Imovel->Contrato->find('list');
		$this->set(compact('users', 'tipos', 'categorias', 'contratos'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Imovel->id = $id;
		if (!$this->Imovel->exists()) {
			throw new NotFoundException(__('Invalid imovel'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Imovel->delete()) {
			$this->Session->setFlash(__('Imovel deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Imovel was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		// Options
		$this->Imovel->recursive = 1;

		// Getters
		$imovels = $this->paginate();

		// Setters
		$this->set( compact('imovels'));
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->Imovel->exists($id)) {
			throw new NotFoundException(__('Invalid imovel'));
		}
		$options = array('conditions' => array('Imovel.' . $this->Imovel->primaryKey => $id));
		$this->set('imovel', $this->Imovel->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Imovel->create();
			if ($this->Imovel->save($this->request->data)) {
				$this->Session->setFlash(__('The imovel has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The imovel could not be saved. Please, try again.'));
			}
		}
		$users = $this->Imovel->User->find('list');
		$tipos = $this->Imovel->Tipo->find('list');
		$categorias = $this->Imovel->Categorium->find('list');
		$contratos = $this->Imovel->Contrato->find('list');
		$this->set(compact('users', 'tipos', 'categorias', 'contratos'));
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->Imovel->exists($id)) {
			throw new NotFoundException(__('Invalid imovel'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Imovel->save($this->request->data)) {
				$this->Session->setFlash(__('The imovel has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The imovel could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Imovel.' . $this->Imovel->primaryKey => $id));
			$this->request->data = $this->Imovel->find('first', $options);
		}
		$users = $this->Imovel->User->find('list');
		$tipos = $this->Imovel->Tipo->find('list');
		$categorias = $this->Imovel->Categorium->find('list');
		$contratos = $this->Imovel->Contrato->find('list');
		$this->set(compact('users', 'tipos', 'categorias', 'contratos'));
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->Imovel->id = $id;
		if (!$this->Imovel->exists()) {
			throw new NotFoundException(__('Invalid imovel'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Imovel->delete()) {
			$this->Session->setFlash(__('Imovel deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Imovel was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
