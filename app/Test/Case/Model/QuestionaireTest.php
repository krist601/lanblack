<?php
App::uses('Questionaire', 'Model');

/**
 * Questionaire Test Case
 *
 */
class QuestionaireTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.questionaire'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Questionaire = ClassRegistry::init('Questionaire');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Questionaire);

		parent::tearDown();
	}

}
