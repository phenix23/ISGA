<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MediasController
 *
 * @author HEDAHDIA FAYCEL
 */
App::uses('File', 'Utility');

class MediasController extends AppController {

    //put your code here
    public $uses = array('Media');
    var $components = array('RequestHandler');
    public $viewClass = 'Json';

    /**
     * Gestion des Images
     * Affichage de la liste des médias d'un article
     * @param type $post_id
     */
    function admin_index($post_id) {

        if ($this->request->is('post')) {
            //creation d'un répertoire pour les Images
            $data = $this->request->data;

            $dir = IMAGES . date('Y');
            if (!file_exists($dir))
                mkdir($dir, 0777);
            $dir .= DS . date('m');
            if (!file_exists($dir))
                mkdir($dir, 0777);
            $f = explode('.', $data['Media']['url']['name']);
            $ext = end($f);
            $filename = Inflector::slug(implode('.', array_slice($f, 0, -1)), '-');
            //save en bdd
            if (!$this->Media->save(array(
                        'name' => $data['Media']['name'],
                        'url' => date('Y') . '/' . date('m') . '/' . $filename . '.' . $ext,
                        'post_id' => $post_id,
                        'type' => 'img'
                    ))) {
                $this->Session->setFlash("Movaise format du l'Image", 'alert');
            } else {
                move_uploaded_file($data['Media']['url']['tmp_name'], $dir . '/' . $filename . '.' . $ext);
            }
        }
        $d = array();
        $d['media'] = $this->Media->find('all', array('conditions' => array('post_id' => $post_id)));
        $this->set($d);
    }

    function admin_delete($id) {
        if (isset($id)) {
            $this->Media->id = $id;
            //supprission de la abse
            $this->Media->delete($id);
            $this->Session->setFlash("suprsission de fichier ok", 'alert');
            $this->redirect($this->referer());
        }
    }

    /**
     * Affichage de l'image afin de l'inserer dans le text
     * @param type $id
     */
    function admin_show($id) {
        //générer le code HTML de l'image à ajouter
        if ($this->request->is(('post'))) {
            $this->set($this->request->data['Media']);
            $this->layout = false;
            $this->render('tinymce');
            return;
        }
        //
        if (isset($id) && !empty($id)) {
            $d['media'] = $this->Media->find('first', array('conditions' => array('id' => $id)));
            $this->set($d);
        }
    }

    /**
     * chargement de l'ensemables des photos
     * @param type $param
     */
    function loadListImages() {
        $d['photos'] = $this->Media->find('all');
        $this->RequestHandler->setContent('json', 'application/json');
        $this->response->body(json_encode($d['photos']));
        $this->response->send();
        exit();
    }

    function uploadImage() {
        if ($this->request->is('post')) {
            $this->Media->create();
            debug($this->request->data);
            if ($this->Media->isUploadedFile($this->request->data['Media']['image_file'])) {

                $image_file = $this->data['Media']['image_file'];
                $fileData = fread(fopen($image_file['tmp_name'], "rb"), $image_file['size']);
                $this->request->data['Media']['image_file'] = $fileData;
                fclose(fopen($image_file['tmp_name'], "rb"));;
                $this->request->data['Media']['name'] = $this->request->data['Media']['name'].'.jpg';
                $path = IMAGES_URL. 'Album' . DS . $this->request->data['Media']['name'];
                $this->request->data['Media']['url'] = $path ;
                file_put_contents($path, $fileData);
                debug($this->request->data);
                if ($this->Media->save($this->request->data['Media'])) {
                    $this->Session->setFlash(__('The Image has been saved'), 'message', array('typeMsg' => 'success'));
                    $this->redirect(array('controller' => 'pages', 'action' => 'galleryImage'));
                } else {
                    $this->Session->setFlash(__('The Image could not be saved. Please try again.'), 'message', array('typeMsg' => 'error'));
                }
            } else {
                $this->Session->setFlash(__('Upload your Support.'), 'message', array('typeMsg' => 'error'));
            }
        }
    }

}

?>
