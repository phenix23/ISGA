<?php

App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * Formations Controller
 *
 * @property Formation $Formation
 */
class FormationsController extends AppController {

    /**
     * Helpers
     *
     * @var array
     */
    var $helpers = array('Js', 'Paginator', 'Html');
    var $components = array('RequestHandler');

    /**
     * index method
     *
     * @return void
     */
    public function index($domaine = null) {
        $this->Formation->recursive = 0;
        if ($domaine == null) {
            //http://localhost/ISGA/formations
            $this->paginate = array('limit' => 25, 'group' => 'domaine');
            $this->set('formations', $this->paginate());
            return $this->paginate();
        } else {
            //   click sur l'url sous-menu
            //http://localhost/ISGA/formations/index/HSE
            $this->paginate = array('limit' => 25, 'conditions' => array('domaine' => $domaine));
            $this->set(array('formations' => $this->paginate(), 'domaine' => $domaine));
            //$this->render('/elements/tabcontent');
        }
    }

    /*
     * view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */

    public function view($id = null) {
        $this->Formation->id = $id;
        if (!$this->Formation->exists()) {
            throw new NotFoundException(__('Invalid formation'));
        }
        $this->set('formation', $this->Formation->read(null, $id));
    }

    /**
     * add method
     *
     * @return void
     */
    public function add() {
        if ($this->request->is('post')) {
            $this->Formation->create();
//           debug($this->Formation->isUploadedFile($this->data['Formation']['pdf_file']));
//            debug($_FILES);
//            die();
            if($this->Formation->isUploadedFile($this->data['Formation']['pdf_file'])){
            $pdf_file = $this->data['Formation']['pdf_file'];
            $fileData = fread(fopen($pdf_file['tmp_name'], "rb"), $pdf_file['size']);
            $this->request->data['Formation']['pdf_file'] = $fileData;
            fclose(fopen($pdf_file['tmp_name'], "rb"));
            if ($this->Formation->save($this->request->data)) {
                $this->Session->setFlash(__('The formation has been saved'), 'message', array('typeMsg' => 'success'));
                $this->redirect(array('action' => 'index'));
            }else{
                $this->Session->setFlash(__('The formation could not be saved. Please try again.'), 'message', array('typeMsg' => 'error'));
            }
            }else {
                $this->Session->setFlash(__('Upload your Support.'), 'message', array('typeMsg' => 'error'));
            }
        }
        $formateurs = $this->Formation->Formateur->find('list', array('fields' => array('nom')));
        $catalogues = $this->Formation->Catalogue->find('list', array('fields' => array('id', 'name')));
        $this->set(compact('formateurs', 'catalogues'));
    }

    /**
     * edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function edit($id = null) {
        $this->Formation->id = $id;
        if (!$this->Formation->exists()) {
            throw new NotFoundException(__('Invalid formation'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if($this->Formation->isUploadedFile($this->data['Formation']['pdf_file'])){
            $pdf_file = $this->data['Formation']['pdf_file'];
            $fileData = fread(fopen($pdf_file['tmp_name'], "r"), $pdf_file['size']);
            $this->request->data['Formation']['pdf_file'] = $fileData;
            fclose(fopen($pdf_file['tmp_name'], "r"));
            }else{
            $this->Session->setFlash(_('Vous devez uploudez le fichier PDF !.'), 'message', array('typeMsg' => 'error'));
            }
            if ($this->Formation->save($this->request->data)) {
                $this->Session->setFlash('The formation has been saved', 'message', array('typeMsg' => 'success'));
                $this->redirect(array('action' => 'index'));
            } else {

                $this->Session->setFlash(_('The formation could not be saved. Please, try again.'), 'message', array('typeMsg' => 'error'));
            }
        } else {
            $this->request->data = $this->Formation->read(null, $id);
        }
        $formateurs = $this->Formation->Formateur->find('list', array('fields' => array('nom')));
        $catalogues = $this->Formation->Catalogue->find('list', array('fields' => array('id', 'name')));

        $this->set(compact('formateurs', 'catalogues'));
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
        $this->Formation->id = $id;
        if (!$this->Formation->exists()) {
            throw new NotFoundException(__('Invalid formation'));
        }
        if ($this->Formation->delete()) {
            $this->Session->setFlash(__('Formation deleted'), 'message', array('typeMsg' => 'success'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Formation was not deleted'), 'message', array('typeMsg' => 'error'));
        $this->redirect(array('action' => 'index'));
    }

    /**
     * admin_index method
     *
     * @return void
     */
    public function admin_index() {
        $this->Formation->recursive = 0;
        $this->set('formations', $this->paginate());
    }

    /**
     * admin_view method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_view($id = null) {
        $this->Formation->id = $id;
        if (!$this->Formation->exists()) {
            throw new NotFoundException(__('Invalid formation'));
        }
        $this->set('formation', $this->Formation->read(null, $id));
    }

    /**
     * admin_add method
     *
     * @return void
     */
    public function admin_add() {
        if ($this->request->is('post')) {
            $this->Formation->create();
            if ($this->Formation->save($this->request->data)) {
                $this->Session->setFlash(__('The formation has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The formation could not be saved. Please, try again.'));
            }
        }
        $formateurs = $this->Formation->Formateur->find('list');
        $catalogues = $this->Formation->Catalogue->find('list');
        $this->set(compact('formateurs', 'catalogues'));
    }

    /**
     * admin_edit method
     *
     * @throws NotFoundException
     * @param string $id
     * @return void
     */
    public function admin_edit($id = null) {
        $this->Formation->id = $id;
        if (!$this->Formation->exists()) {
            throw new NotFoundException(__('Invalid formation'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->Formation->save($this->request->data)) {
                $this->Session->setFlash(__('The formation has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The formation could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->Formation->read(null, $id);
        }
        $formateurs = $this->Formation->Formateur->find('list');
        $catalogues = $this->Formation->Catalogue->find('list');
        $this->set(compact('formateurs', 'catalogues'));
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
        $this->Formation->id = $id;
        if (!$this->Formation->exists()) {
            throw new NotFoundException(__('Invalid formation'));
        }
        if ($this->Formation->delete()) {
            $this->Session->setFlash(__('Formation deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Formation was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

//    public function tab1($domaine = null, $page = null) {
//        if (!empty($this->passedArgs['page'])) {
//            $page = intval($this->passedArgs['page']);
//        };
//        $this->Formation->recursive = 0;
//        $this->paginate = array('conditions' => array('domaine' => $domaine), 'limit' => 1, 'page' => $page);
//        $formations = $this->paginate();
//        if (!empty($this->params['requested'])) {
//            return array('formations' => $formations, 'paginator' => $this->params['paging']['Formation']);
//        } else {
//            //liens de pagination
//            debug($this->view = 'index');
//            $this->set('formations', $formations);
//            $this->render('index');
//        }
//    }
//
//    public function tab2($domaine = null) {
//        $this->Formation->recursive = 0;
//        $this->paginate = array('conditions' => array('domaine' => $domaine), 'limit' => 1);
//        $formations = $this->paginate();
//        $this->set($formations);
//    }
//
//    public function tab3($domaine = null) {
////        $this->paginate = array('conditions' => array('domaine' => $domaine), 'limit' => 1);
////        $formations = $this->paginate();
////        $paginator = $this->params;
////        if ($this->request->is('ajax')) {
////            echo 'test';
////            $this->set('formations', $formations);
////            $this->referer('index');
////        }
////        if ($this->request->is('requested')) {
////            return array('formations' => $formations, 'paginator' => $paginator, 'paging' => $this->params['paging']);
////        } else {
////            $this->set('formations', $formations);
////            $this->referer('index');
////        }
//        $this->Formation->recursive = 0;
//        $this->paginate = array('conditions' => array('domaine' => $domaine), 'limit' => 1);
//        $formations = $this->paginate();
//        return $formations;
//    }

    public function sendMail() {
        $data = $this->request->data;
        $email = new CakeEmail('gmail');
        $email->from($data['Formation']['Email']);
        $email->to('test.messagrie@gmail.com');
        $email->subject($data['Formation']['subject']);
        $email->send($data['Formation']['message']);
        $this->Session->setFlash('Message Envoyée par succées', 'message');
        $this->redirect($this->referer());
    }

    function download($id_formation = null) {
        $formation = $this->Formation->find('first', array('conditions'=> array('Formation.id' => $id_formation)));
        $path = WWW_ROOT . 'files'.DS.'pdfs'.DS.'formations' . DS . $formation['Formation']['name'] . '.pdf';
        file_put_contents($path, $formation['Formation']['pdf_file']);
        $this->viewClass = 'Media';
        $params = array(
            'id' => $formation['Formation']['name'] . '.pdf',
            'name' => $formation['Formation']['name'],
            'extension' => 'pdf',
            'download' => true ,
            'cache' =>  true ,
            'mimeType' => array('pdf' => 'application/pdf'),
            'path' => WWW_ROOT . 'files'.DS.'pdfs'.DS.'formations' . DS
        );
        $this->set($params);
        //TODO : supprission de fichier
        //unlink($path);
        
    }

    public function tabcontent($domaine = null, $page = null) {
        $this->Formation->recursive = 0;
        $this->paginate = array('conditions' => array('domaine' => $domaine), 'limit' => 10);
        if (!empty($this->passedArgs['page'])) {
            $page = intval($this->passedArgs['page']);
            $this->paginate = array('conditions' => array('domaine' => $domaine), 'limit' => 10, 'page' => $page);
        }
        $formations = $this->paginate();
        if (!empty($this->params['requested'])) {
            return array('formations' => $formations, 'paginator' => $this->params['paging']['Formation'], 'domaine' => $domaine);
        } else {
            $this->set(array('formations' => $formations, 'paginator' => $this->params['paging']['Formation'], 'domaine' => $domaine));
            $this->render('/elements/tabcontent');
        }
        if ($this->RequestHandler->isAjax()) {
            $this->set(array('formations' => $formations, 'paginator' => $this->params['paging']['Formation'], 'domaine' => $domaine));
            $this->render('/elements/tabcontent');
            return;
        }
    }

    public function search() {      
//        if($this->RequestHandler->isAjax()){
//            $domaine = $this->request->data['domaine'];
//            $this->render('index');
//        }
        if ($this->request->is('get')&&!empty($this->request->query['name'])||!empty($this->request->query['date_start'])||!empty($this->request->query['location'])) {
            $this->paginate = array('limit' => 25, 'conditions' => array('Formation.name Like' => '%'.$this->request->query['name'].'%', 'Formation.date_start Like' => '%'.$this->request->query['date_start'].'%', 'Formation.location Like' => '%'.$this->request->query['location'].'%'));
            $this->set(array('formations' => $this->paginate()));
            $this->render('index');
        } else {
            $this->Session->setFlash('Pas de donnes saiser dans les champs de la recherce', 'message', array('tyepMsg' => 'error'));
            $this->redirect('/formations/');
        }
    }
    
    public function news($last_id = null){
        if(isset($last_id)){
        $results = $this->Formation->find('all', array('limit'=>5 ,'order'=>'date_start DESC'));
        }else{
        $results = $this->Formation->find('first', array('conditions'=>array('id'=> $last_id))); 
        }
        if ($this->RequestHandler->isAjax()) {
            $this->set(array('results' => $results));
            $this->render('/elements/news');
            return;
        }
        return $results;
    }
    
     
}
