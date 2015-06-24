<?php
App::uses('Pharmacist', 'Model');

/**
 * Pharmacist Test Case
 *
 */
class PharmacistTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.pharmacist'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Pharmacist = ClassRegistry::init('Pharmacist');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Pharmacist);

		parent::tearDown();
	}

}
