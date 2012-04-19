<?php
class Card extends AppModel {
	var $name = 'Card';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Customer' => array(
			'className' => 'Customer',
			'foreignKey' => 'customer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Rental' => array(
			'className' => 'Rental',
			'foreignKey' => 'card_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Sale' => array(
			'className' => 'Sale',
			'foreignKey' => 'card_id',
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
	
	var $validate = array(
		'card_number' => array(
			'numeric' => array(
			'rule' => 'numeric',
			'allowEmpty' => false,
			'message' => 'must be a number'
			)
		),
		'verification' => array(
			'numeric' => array(
			'rule' => 'numeric',
			'allowEmpty' => false,
			'message' => 'must be a number'
			),
			
			'minLength' => array(
			'rule' => array('minLength', 3),
			'allowEmpty' => false,
			'message' => 'must be 3 digits long'
			),
			
			'maxLength' => array(
			'rule' => array('maxLength', 3),
			'allowEmpty' => false,
			'message' => 'must be 3 digits long'
			),
		),
		'customer_id' => array(
			'numeric' => array(
			'rule' => 'numeric',
			'allowEmpty' => false,
			'message' => 'must have expiration date'
			)
		)  
	);

}
