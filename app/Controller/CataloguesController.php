<?php

App::uses('AppController', 'Controller');

/**
 * Catalogues Controller
 *
 * @property Catalogue $Catalogue   
 */
class CataloguesController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Catalogue->recursive = 0;
        $this->set('catalogues', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Catalogue->id = $id;
        if (!$this->Catalogue->exists()) {
            throw new NotFoundException(__('Invalid catalogue'));
        }
        $this->set('catalogue', $this->Catalogue->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Catalogue->create();
            $pdf_file = $this->data['Catalogue']['pdf_file'];
            $fileData = fread(fopen($pdf_file['tmp_name'], "r"), $pdf_file['size']);
            $this->request->data['Catalogue']['pdf_file'] = $fileData;
            if ($this->Catalogue->save($this->request->data)) {
                $this->Session->setFlash(__('The catalogue has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The catalogue could not be saved. Please, try again.'));
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
        $this->Catalogue->id = $id;
        if (!$this->Catalogue->exists()) {
            throw new NotFoundException(__('Invalid catalogue'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            $pdf_file = $this->data['Catalogue']['pdf_file'];
            $fileData = fread(fopen($pdf_file['tmp_name'], "r"), $pdf_file['size']);
            $this->request->data['Catalogue']['pdf_file'] = $fileData;
            if ($this->Catalogue->save($this->request->data)) {
                $this->Session->setFlash(__('The catalogue has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The catalogue could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Catalogue->read(null, $id);
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
        $this->Catalogue->id = $id;
        if (!$this->Catalogue->exists()) {
            throw new NotFoundException(__('Invalid catalogue'));
        }
        if ($this->Catalogue->delete()) {
            $this->Session->setFlash(__('Catalogue deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Catalogue was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->Catalogue->recursive = 0;
        $this->set('catalogues', $this->paginate());
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        $this->Catalogue->id = $id;
        if (!$this->Catalogue->exists()) {
            throw new NotFoundException(__('Invalid catalogue'));
        }
        $this->set('catalogue', $this->Catalogue->read(null, $id));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->Catalogue->create();
            if ($this->Catalogue->save($this->request->data)) {
                $this->Session->setFlash(__('The catalogue has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The catalogue could not be saved. Please, try again.'));
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
        $this->Catalogue->id = $id;
        if (!$this->Catalogue->exists()) {
            throw new NotFoundException(__('Invalid catalogue'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Catalogue->save($this->request->data)) {
                $this->Session->setFlash(__('The catalogue has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The catalogue could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Catalogue->read(null, $id);
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
        $this->Catalogue->id = $id;
        if (!$this->Catalogue->exists()) {
            throw new NotFoundException(__('Invalid catalogue'));
        }
        if ($this->Catalogue->delete()) {
            $this->Session->setFlash(__('Catalogue deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Catalogue was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    /**
     * Téléchargement la dérnieres mise à jours du Catalogue 
     */
    function download() {
        $catalogue = $this->Catalogue->find('first', array('order' => 'date_validation DESC'));
        $path = WWW_ROOT . 'files\pdfs\catalogues' . DS . $catalogue['Catalogue']['name'].'.pdf';
        file_put_contents($path, $catalogue['Catalogue']['pdf_file']);
        $this->viewClass = 'Media';
        $params = array(
            'id' => $catalogue['Catalogue']['name'].'.pdf',
            'name' => $catalogue['Catalogue']['name'],
            'extension' => 'pdf',
            'mimeType' => array(
                'pdf' => 'application/pdf'),
                'path' => WWW_ROOT .'files'.DS.'pdfs'.DS.'catalogues'.DS
               );
        $this->set($params);
    }

}
