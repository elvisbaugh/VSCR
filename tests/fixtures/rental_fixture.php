<?php
/* Rental Fixture generated on: 2012-04-19 04:55:05 : 1334811305 */
class RentalFixture extends CakeTestFixture {
	var $name = 'Rental';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'customer_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'vehicle_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'card_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'customer_id' => 1,
			'vehicle_id' => 1,
			'card_id' => 1
		),
	);
}
