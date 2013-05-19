<?php
App::uses('AppModel', 'Model');
/**
 * Client Model
 *
 * @property Inscription $Inscription
 */
class Client extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'clients';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Inscription' => array(
			'className' => 'Inscription',
			'foreignKey' => 'client_id',
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

        
        
}
