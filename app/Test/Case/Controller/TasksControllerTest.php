<?php
// app/Test/Case/Controller/TasksControllerTest.php
App::uses('AppController', 'Controller');
App::uses('TasksController', 'Controller');

class TasksControllerTest extends ControllerTestCase {

	public $fixtures = array(
			'app.task',
			'app.note'
	);

	public function testタスクを一覧表示できる() {
		$result = $this->testAction('/tasks/index', array('return' => 'vars'));
		$tasks_data = $result['tasks_data'];
		$this->assertCount(7, $tasks_data);
		$this->assertEquals('タスク1', $tasks_data[0]['Task']['name']);
		$this->assertEquals('タスク2', $tasks_data[1]['Task']['name']);
		$this->assertEquals('タスク3', $tasks_data[2]['Task']['name']);
		$this->assertEquals('タスク4', $tasks_data[3]['Task']['name']);
		$this->assertEquals('タスク5', $tasks_data[4]['Task']['name']);
		$this->assertEquals('タスク6', $tasks_data[5]['Task']['name']);
		$this->assertEquals('タスク7', $tasks_data[6]['Task']['name']);
	}

	public function testタスク一覧はディブタグで表示する() {
		$result = $this->testAction('/tasks/index', array('return' => 'view'));
		$expected = array(
				'tag' => 'div',
				'attributes' => array('class' => 'roundBox')
		);
		$this->assertTag($expected, $result);
	}
}