<?php
App::uses('Supervise', 'Model');

/**
 * Supervise Test Case
 *
 */
class SuperviseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.supervise'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Supervise = ClassRegistry::init('Supervise');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Supervise);

		parent::tearDown();
	}

}
