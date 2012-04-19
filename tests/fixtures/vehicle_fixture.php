<?php
/* Vehicle Fixture generated on: 2012-04-19 04:56:16 : 1334811376 */
class VehicleFixture extends CakeTestFixture {
	var $name = 'Vehicle';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'customer_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'vehicle_type' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'make' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 60, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'year_of_vehicle' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'transmission' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 100, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'price' => array('type' => 'float', 'null' => false, 'default' => NULL, 'length' => '10,2'),
		'policy_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'customer_id' => 1,
			'vehicle_type' => 'Lorem ipsum dolor sit amet',
			'make' => 'Lorem ipsum dolor sit amet',
			'year_of_vehicle' => 1,
			'transmission' => 'Lorem ipsum dolor sit amet',
			'price' => 1,
			'policy_id' => 1
		),
	);
}
