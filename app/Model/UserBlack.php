<?php
App::uses('AppModel', 'Model');
/**
 * User Model
 *
 */
class UserBlack extends AppModel {

/**
 * Use table
 *
 * @var mixed False or table name
 */
	public $useTable = 'UserBlack';
	public $primaryKey = 'idUserBlack';

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'idUserBlack' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'name' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
				//'message' => 'Your custom message here',
				'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'email' => array(
                        'isUnique' => array (
                                'rule' => 'isUnique',
                                'message' => 'El email ya Existe',
                        )
		),
	);
   
}