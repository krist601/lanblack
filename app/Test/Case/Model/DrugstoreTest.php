<?php
App::uses('Drugstore', 'Model');

/**
 * Drugstore Test Case
 *
 */
class DrugstoreTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.drugstore'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Drugstore = ClassRegistry::init('Drugstore');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Drugstore);

		parent::tearDown();
	}

}
