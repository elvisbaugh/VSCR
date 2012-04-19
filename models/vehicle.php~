<?php
class Vehicle extends AppModel {
	var $name = 'Vehicle';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Customer' => array(
			'className' => 'Customer',
			'foreignKey' => 'customer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Policy' => array(
			'className' => 'Policy',
			'foreignKey' => 'policy_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Rental' => array(
			'className' => 'Rental',
			'foreignKey' => 'vehicle_id',
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
			'foreignKey' => 'vehicle_id',
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
		'customer_id' => array(
			'numeric' => array(
			'rule' => 'numeric',
			'allowEmpty' => false,
			'message' => 'must belong to customer'
			)
		),
		'vehicle_typed' => array(
			'maxLength' => array(
			'rule' => array('maxLength', 1),
			'allowEmpty' => false,
			'message' => 'must have a type'
			)
		),
		'make' => array(
			'maxLength' => array(
			'rule' => array('maxLength', 1),
			'allowEmpty' => false,
			'message' => 'must have a make'
			)
		),
		'year_of_vehicle' => array(
			'numeric' => array(
			'rule' => 'numeric',
			'allowEmpty' => false,
			'message' => 'must have a year'
			)
		),
		'transmission' => array(
			'maxLength' => array(
			'rule' => array('maxLength', 1),
			'allowEmpty' => false,
			'message' => 'must have a transmission'
			)
		),
		'price' => array(
			'numeric' => array(
			'rule' => 'numeric',
			'allowEmpty' => false,
			'message' => 'must have a price'
			)
		),
		'policy_id' => array(
			'numeric' => array(
			'rule' => 'numeric',
			'allowEmpty' => false,
			'message' => 'must have a policy'
			)
		)
	);

}
