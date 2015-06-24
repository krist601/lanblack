<?php
App::uses('AppModel', 'Model');
/**
 * Fileupload Model
 *
 */
class Fileupload extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'Fileupload';
	public $primaryKey = 'idFileupload';

/**
 * Validation rules
 *
 * @var array
 */
        public $actsAs = array('Upload.Upload' => array('archivo' => array('fields' => array('dir' => 'archivo'))));
	public $validate = array(
		'fileName' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
        
}