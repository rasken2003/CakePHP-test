<?php
// app/Test/Fixture/TaskFixture.php
class TaskFixture extends CakeTestFixture {
	public $import = array('table' => 'tasks');

	public $records = array(
			array(
					'id' => 1,
					'name' => 'タスク1',
					'body' => 'タスク1です。',
					'status' => 0,
					'due_date' => '2015/11/06 11:35:00',
					'created' => '2015/11/02 13:18:23'
			),
			array(
					'id' => 2,
					'name' => 'タスク2',
					'body' => 'タスク2です。',
					'status' => 0,
					'due_date' => '2015/11/06 11:35:00',
					'created' => '2015/11/02 13:19:23'
			),
			array(
					'id' => 3,
					'name' => 'タスク3',
					'body' => 'タスク3です。',
					'status' => 0,
					'due_date' => '2015/11/06 11:35:00',
					'created' => '2015/11/02 13:20:23'
			),
			array(
					'id' => 4,
					'name' => 'タスク4',
					'body' => 'タスク4です。',
					'status' => 0,
					'due_date' => '2015/11/06 11:35:00',
					'created' => '2015/11/02 13:21:23'
			),
			array(
					'id' => 5,
					'name' => 'タスク5',
					'body' => 'タスク5です。',
					'status' => 0,
					'due_date' => '2015/11/06 11:35:00',
					'created' => '2015/11/02 13:22:23'
			),
			array(
					'id' => 6,
					'name' => 'タスク6',
					'body' => 'タスク6です。',
					'status' => 0,
					'due_date' => '2015/11/06 11:35:00',
					'created' => '2015/11/02 13:23:23'
			),
			array(
					'id' => 7,
					'name' => 'タスク7',
					'body' => 'タスク7です。',
					'status' => 0,
					'due_date' => '2015/11/06 11:35:00',
					'created' => '2015/11/02 13:24:23'
			),
	);
}