<?php
/* Card Fixture generated on: 2012-04-19 04:49:51 : 1334810991 */
class CardFixture extends CakeTestFixture {
	var $name = 'Card';

	var $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'key' => 'primary'),
		'card_number' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 16),
		'customer_id' => array('type' => 'integer', 'null' => false, 'default' => NULL),
		'verification' => array('type' => 'integer', 'null' => false, 'default' => NULL, 'length' => 3),
		'expiration_date' => array('type' => 'datetime', 'null' => false, 'default' => NULL),
		'indexes' => array('PRIMARY' => array('column' => 'id', 'unique' => 1)),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

	var $records = array(
		array(
			'id' => 1,
			'card_number' => 1,
			'customer_id' => 1,
			'verification' => 1,
			'expiration_date' => '2012-04-19 04:49:51'
		),
	);
}
