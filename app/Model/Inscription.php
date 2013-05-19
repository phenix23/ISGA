<?php
App::uses('AppModel', 'Model');
/**
 * Inscription Model
 *
 * @property Client $Client
 * @property Formation $Formation
 */
class Inscription extends AppModel {


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Client' => array(
			'className' => 'Client',
			'foreignKey' => 'client_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Formation' => array(
			'className' => 'Formation',
			'foreignKey' => 'formation_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
        
        public $hasOne = 'Event';
}
