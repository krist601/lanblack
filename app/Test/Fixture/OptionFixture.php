<?php
/**
 * OptionFixture
 *
 */
class OptionFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'option';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idOption' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'description' => array('type' => 'text', 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'isGood' => array('type' => 'boolean', 'null' => false, 'default' => null, 'key' => 'unique'),
		'idQuestion_fk' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('idOption', 'idQuestion_fk'), 'unique' => 1),
			'Correcta_UNIQUE' => array('column' => 'isGood', 'unique' => 1),
			'idOption_UNIQUE' => array('column' => 'idOption', 'unique' => 1),
			'fk_Option_Question1_idx' => array('column' => 'idQuestion_fk', 'unique' => 0)
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
			'idOption' => 1,
			'description' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
			'isGood' => 1,
			'idQuestion_fk' => 1
		),
	);

}
