<?php
class Customer extends AppModel {
	var $name = 'Customer';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Parish' => array(
			'className' => 'Parish',
			'foreignKey' => 'parish_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Card' => array(
			'className' => 'Card',
			'foreignKey' => 'customer_id',
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
		'Rental' => array(
			'className' => 'Rental',
			'foreignKey' => 'customer_id',
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
			'foreignKey' => 'customer_id',
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
		'Vehicle' => array(
			'className' => 'Vehicle',
			'foreignKey' => 'customer_id',
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
		'name' => array(
			'minLength' => array(
			'rule' => array('minLength', 10),
			'allowEmpty' => false,
			'message' => 'Customer must have a name.'
			)
		),
		'address' => array(
			'minLength' => array(
			'rule' => array('minLength',1),
			'allowEmpty' => false,
			'message' => 'must have a address name'
			)
		),
		'city' => array(
			'minLength' => array(
			'rule' => array('minLength',1),
			'allowEmpty' => false,
			'message' => 'must have a city name'
			)
		),
		'postal_code' => array(
			'minLength' => array(
			'rule' => array('minLength',1),
			'allowEmpty' => true,
			'message' => 'must have postal code'
			)
		),
		'receipt' => array(
			'minLength' => array(
			'rule' => array('minLength',1),
			'allowEmpty' => true,
			'message' => 'must have a number'
			)
		),
		'parish_id' => array(
			'numeric' => array(
			'rule' => 'numeric',
			'allowEmpty' => true,
			'message' => 'must have a parish'
			)
		)
		
	);

}
