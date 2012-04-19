<?php
class Rental extends AppModel {
	var $name = 'Rental';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Customer' => array(
			'className' => 'Customer',
			'foreignKey' => 'customer_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Vehicle' => array(
			'className' => 'Vehicle',
			'foreignKey' => 'vehicle_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Card' => array(
			'className' => 'Card',
			'foreignKey' => 'card_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
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
		'vehicle_id' => array(
			'numeric' => array(
			'rule' => 'numeric',
			'allowEmpty' => false,
			'message' => 'must belong to vehicle'
			)
		),
		'card_id' => array(
			'numeric' => array(
			'rule' => 'numeric',
			'allowEmpty' => false,
			'message' => 'must belong to card'
			)
		)
	);
}
