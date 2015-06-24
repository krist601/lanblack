<?php
/**
 * RepresentativeFixture
 *
 */
class RepresentativeFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'representative';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idRepresentative' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'username' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'comment' => '*Cantidad de caracteres para el Nombre de Usuario?

', 'charset' => 'utf8'),
		'name' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'lastName' => array('type' => 'string', 'null' => true, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'identifierMSD' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'key' => 'unique', 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idRepresentative', 'unique' => 1),
			'Nombre Usuario_UNIQUE' => array('column' => 'username', 'unique' => 1),
			'idRepresentante_UNIQUE' => array('column' => 'idRepresentative', 'unique' => 1),
			'identificadorMSD_UNIQUE' => array('column' => 'identifierMSD', 'unique' => 1)
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
			'idRepresentative' => 1,
			'username' => 'Lorem ipsum dolor sit amet',
			'name' => 'Lorem ipsum dolor sit amet',
			'lastName' => 'Lorem ipsum dolor sit amet',
			'identifierMSD' => 'Lorem ipsum dolor sit amet'
		),
	);

}
