<?php
/**
 * DrugstoreFixture
 *
 */
class DrugstoreFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'drugstore';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idDrugstore' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'drugstoreName' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'address' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 100, 'collate' => 'utf8_general_ci', 'comment' => 'Por si acaso la dirección se escribe de forma larga... ', 'charset' => 'utf8'),
		'city' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'state' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'bric' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'identifierDrugstore' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'unique'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idDrugstore', 'unique' => 1),
			'idFarmacia_UNIQUE' => array('column' => 'idDrugstore', 'unique' => 1),
			'identifierDrugstore_UNIQUE' => array('column' => 'identifierDrugstore', 'unique' => 1)
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
			'idDrugstore' => 1,
			'drugstoreName' => 'Lorem ipsum dolor sit amet',
			'address' => 'Lorem ipsum dolor sit amet',
			'city' => 'Lorem ipsum dolor sit amet',
			'state' => 'Lorem ipsum dolor sit amet',
			'bric' => 1,
			'identifierDrugstore' => 1
		),
	);

}
