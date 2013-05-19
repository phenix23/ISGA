<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Media
 *
 * @author HEDAHDIA FAYCEL
 */
class Media extends AppModel {

    //put your code here
    var $name = 'medias';
    //validation des URL's
//    var $validate = array(
//        'url' => array(
//            'rule' => '/.*\.(jpg|png)$/',
//            'required' => true,
//            'message' => " le champe 'name' ne doit pas etre vide"
//        )
//    );

    function beforeDelete($cascade = FALSE) {
        //path  'C:\Dev\PhpServer\www\PhpProject1\app\webroot\img\2013/01/biggestion.jpg'
        $path = IMAGES . $this->field('url');
        //supprission de fichier de la répertoire
        unlink($path);
        return true;
    }
    
    public function isUploadedFile($params) {
//        $val = array_shift($params);
//        debug($val);
        if ((isset($params['error']) && $params['error'] == 0) ||
                (!empty($params['tmp_name']) && $params['tmp_name'] != 'none')
        ) {
            return is_uploaded_file($params['tmp_name']);
        }
        return false;
    }


}

?>
