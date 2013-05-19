<?php

App::uses('AppController', 'Controller');

/**
 * Inscriptions Controller
 *
 * @property Inscription $Inscription
 */
class InscriptionsController extends AppController {

    /**
     * index method
     *
     * @return void
     */
    public function index() {
        $this->Inscription->recursive = 0;
        $this->set('inscriptions', $this->paginate());
    }

    /**
     * view method
     *
     * @throws NotFoundException 
     * @param string $id
     * @return void
     */
    public function view($id = null) {
        $this->Inscription->id = $id;
        if (!$this->Inscription->exists()) {
            throw new NotFoundException(__('Invalid inscription'));
        }
        $this->set('inscription', $this->Inscription->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add($id_formation = null) {
        $this->loadModel('Client');
        if ($this->request->is('post')) {
            $this->Inscription->create();
            $this->Client->create();
            if ($this->Client->save($this->request->data['Client'])) {
                $data = array_slice($this->request->data['Client'],-4);    
                if ($this->Inscription->save(array_merge($data, array('client_id' => $this->Client->getInsertID(),'formation_id'=> $id_formation)))) {
                    $this->Session->setFlash('Inscription réussite','message',array('typeMsg'=>'success'));
                    $this->redirect(array('controller'=>'formations','action' => 'index'));
                } else {
                    $this->Session->setFlash('The inscription could not be saved. Please, try again.','message',array('typeMsg'=>'error'));
                }
            } else {
                $this->Session->setFlash('The client could not be saved. Please, try again'.'message',array('typeMsg'=>'error'));
            }
        }
            if (isset($id_formation)&& !empty($id_formation)) {
                //$clients = $this->Inscription->Client->find('list');
                $formations = $this->Inscription->Formation->find('first', array('conditions' => array('Formation' . '.id' => $id_formation), 'fields' => array('name','date_start','date_end','catalogue_id','location')));
                $catalogues = $this->Inscription->Formation->Catalogue->find('first',array('conditions' => array('Catalogue' . '.id' => $formations['Formation']['catalogue_id'])));
                $this->set(compact('formations','catalogues'));
            } else {
                $this->Session->setFlash("Error");
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
        $this->Inscription->id = $id;
        if (!$this->Inscription->exists()) {
            throw new NotFoundException(__('Invalid inscription'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Inscription->save($this->request->data)) {
                $this->Session->setFlash(__('The inscription has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The inscription could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Inscription->read(null, $id);
        }
        $clients = $this->Inscription->Client->find('list');
        $formations = $this->Inscription->Formation->find('list');
        $this->set(compact('clients', 'formations'));
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
        $this->Inscription->id = $id;
        if (!$this->Inscription->exists()) {
            throw new NotFoundException(__('Invalid inscription'));
        }
        if ($this->Inscription->delete()) {
            $this->Session->setFlash(__('Inscription deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Inscription was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->Inscription->recursive = 0;
        $this->set('inscriptions', $this->paginate());
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        $this->Inscription->id = $id;
        if (!$this->Inscription->exists()) {
            throw new NotFoundException(__('Invalid inscription'));
        }
        $this->set('inscription', $this->Inscription->read(null, $id));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->Inscription->create();
            if ($this->Inscription->save($this->request->data)) {
                $this->Session->setFlash(__('The inscription has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The inscription could not be saved. Please, try again.'));
            }
        }
        $clients = $this->Inscription->Client->find('list');
        $formations = $this->Inscription->Formation->find('list');
        $this->set(compact('clients', 'formations'));
    }

    /**
     * admin_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        $this->Inscription->id = $id;
        if (!$this->Inscription->exists()) {
            throw new NotFoundException(__('Invalid inscription'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Inscription->save($this->request->data)) {
                $this->Session->setFlash(__('The inscription has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The inscription could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Inscription->read(null, $id);
        }
        $clients = $this->Inscription->Client->find('list');
        $formations = $this->Inscription->Formation->find('list');
        $this->set(compact('clients', 'formations'));
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
        $this->Inscription->id = $id;
        if (!$this->Inscription->exists()) {
            throw new NotFoundException(__('Invalid inscription'));
        }
        if ($this->Inscription->delete()) {
            $this->Session->setFlash(__('Inscription deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Inscription was not deleted'));
        $this->redirect(array('action' => 'index'));
    }
    
       public function list_planification($id_formation = null) {
        $d = array();
        $t = array();
        $v['planifs'] = array();
        $this->loadModel('Event');
        $options = array('conditions'=>array('Event.formation_id'=> $id_formation) , 'fields'=>array('Event.id','Event.title','Event.start','Event.end'),'recursive' => 0);
        $d['planifs'] = $this->Event->find('all',$options);
        foreach ($d['planifs'] as $event){
         $t[$event['Event']['id']] = $event['Event']['title'] . ' Du :  ' . $event['Event']['start'].' Au : '.$event['Event']['end'];
        }
        $t[0]= 'Autre';
        return $t;
    }

}
