<?php

App::uses('AppModel', 'Model');

/**
 * Formation Model
 *
 * @property Formateur $Formateur
 * @property Catalogue $Catalogue
 * @property Inscription $Inscription
 */
class Formation extends AppModel {

    /**
     * Display field
     *
     * @var string
     */
    public $displayField = 'name';


    //The Associations below have been created with all possible keys, those that are not needed can be removed

    /**
     * belongsTo associations
     *
     * @var array
     */
    public $belongsTo = array(
        'Formateur' => array(
            'className' => 'Formateur',
            'foreignKey' => 'formateur_id',
            'conditions' => '',
            'fields' => array('id', 'nom'),
            'order' => ''
        ),
        'Catalogue' => array(
            'className' => 'Catalogue',
            'foreignKey' => 'catalogue_id',
            'conditions' => '',
            'fields' => array('id', 'name'),
            'order' => ''
        )
    );

    /**
     * hasMany associations
     *
     * @var array
     */
    public $hasMany = array(
        'Inscription' => array(
            'className' => 'Inscription',
            'foreignKey' => 'formation_id',
            'dependent' => false,
            'conditions' => '',
            'fields' => '',
            'order' => '',
            'limit' => '',
            'offset' => '',
            'exclusive' => '',
            'finderQuery' => '',
            'counterQuery' => ''
        )
    );

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
