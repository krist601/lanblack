<?php
App::uses('Representative', 'Model');

/**
 * Representative Test Case
 *
 */
class RepresentativeTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.representative'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Representative = ClassRegistry::init('Representative');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Representative);

		parent::tearDown();
	}

}
