<?php
/**
 * AnswerFixture
 *
 */
class AnswerFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'answer';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idAnswer' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'date' => array('type' => 'date', 'null' => false, 'default' => null),
		'idRepresentative_fk' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'idDrugstore_fk' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'idPharmacist_fk' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'idOption_fk' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'indexes' => array(
			'PRIMARY' => array('column' => 'idAnswer', 'unique' => 1),
			'idAnswer_UNIQUE' => array('column' => 'idAnswer', 'unique' => 1),
			'fk_Resultados_Representante1_idx' => array('column' => 'idRepresentative_fk', 'unique' => 0),
			'fk_Resultados_Farmacias1_idx' => array('column' => 'idDrugstore_fk', 'unique' => 0),
			'fk_Answer_Pharmacist1_idx' => array('column' => 'idPharmacist_fk', 'unique' => 0),
			'fk_Answer_Option1_idx' => array('column' => 'idOption_fk', 'unique' => 0)
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
			'idAnswer' => 1,
			'date' => '2014-12-18',
			'idRepresentative_fk' => 1,
			'idDrugstore_fk' => 1,
			'idPharmacist_fk' => 1,
			'idOption_fk' => 1
		),
	);

}
