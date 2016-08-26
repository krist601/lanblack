<?php
/**
 * QuestionaireFixture
 *
 */
class QuestionaireFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'questionaire';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idQuesionaire' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'name' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 45, 'collate' => 'utf8_general_ci', 'charset' => 'utf8'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idQuesionaire', 'unique' => 1),
			'idEvaluacion_UNIQUE' => array('column' => 'idQuesionaire', 'unique' => 1)
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
			'idQuesionaire' => 1,
			'name' => 'Lorem ipsum dolor sit amet'
		),
	);

}
