<?php
// app/Test/Case/Model/TaskTest.php
App::uses('Task', 'Model');
class TaskTest extends CakeTestCase {

	public $fixtures = array(
			'app.task',
			'app.note'
	);

	public function setUp() {
		parent::setUp();
		$this->Task = ClassRegistry::init('Task');
	}

	public function tearDown() {
		unset($this->Task);
		parent::tearDown();
	}

	public function testタイトルは必須入力である() {
		$this->Task->create(array('Task' => array('name' => '')));
		$this->assertFalse($this->Task->validates());
		$this->assertArrayHasKey('name', $this->Task->validationErrors);
	}

	public function test５件が取得できること() {
		$data = $this->Task->find('all');
		$this->assertCount(7, $data);
		$this->assertEquals('タスク1', $data[0]['Task']['name']);
		$this->assertEquals('タスク2', $data[1]['Task']['name']);
		$this->assertEquals('タスク3', $data[2]['Task']['name']);
		$this->assertEquals('タスク4', $data[3]['Task']['name']);
		$this->assertEquals('タスク5', $data[4]['Task']['name']);
	}
}