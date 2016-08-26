<?php
App::uses('Fileupload', 'Model');

/**
 * Fileupload Test Case
 *
 */
class FileuploadTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.fileupload'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Fileupload = ClassRegistry::init('Fileupload');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Fileupload);

		parent::tearDown();
	}

}
