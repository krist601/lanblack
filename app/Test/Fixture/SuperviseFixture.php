<?php
/**
 * SuperviseFixture
 *
 */
class SuperviseFixture extends CakeTestFixture {

/**
 * Table name
 *
 * @var string
 */
	public $table = 'supervise';

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'idSupervise' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'idDrugstore_fk' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'idRepresentative_fk' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'indexes' => array(
			'PRIMARY' => array('column' => array('idSupervise', 'idDrugstore_fk', 'idRepresentative_fk'), 'unique' => 1),
			'fk_Farmacias_has_Representante_Farmacias1_idx' => array('column' => 'idDrugstore_fk', 'unique' => 0),
			'fk_Farmacias_has_Representante_Representante1_idx' => array('column' => 'idRepresentative_fk', 'unique' => 0)
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
			'idSupervise' => 1,
			'idDrugstore_fk' => 1,
			'idRepresentative_fk' => 1
		),
	);

}
