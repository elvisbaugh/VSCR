<?php
class Policy extends AppModel {
	var $name = 'Policy';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Vehicle' => array(
			'className' => 'Vehicle',
			'foreignKey' => 'policy_id',
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
			'ruleName' => array(
			'rule' => array('minlength', 1),
			'allowEmpty' => false,
			'message' => 'must have policy name'
			)
		),
		'description' => array(
			'ruleName' => array(
			'rule' => array('minlength', 1),
			'allowEmpty' => true,
			'message' => 'must have a description'
			)
		),
	);

}
