<?php
/**
 * PharmacistFixture
 *
 */
class PharmacistFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'pharmacist';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idPharmacist' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'cedula' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'unique'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'lastName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'phone' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'comment' => 'Con - o sin -?', 'charset' => 'utf8'),
		'email' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idPharmacist', 'unique' => 1),
			'Cedula_UNIQUE' => array('column' => 'cedula', 'unique' => 1),
			'idPharmacist_UNIQUE' => array('column' => 'idPharmacist', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'idPharmacist' => 1,
			'cedula' => 1,
			'name' => 'Lorem ipsum dolor sit amet',
			'lastName' => 'Lorem ipsum dolor sit amet',
			'phone' => 'Lorem ipsum dolor sit amet',
			'email' => 'Lorem ipsum dolor sit amet'
		),
	);

}
