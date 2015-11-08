<?php
// app/Model/Task.php
class Task extends AppModel {

	public $hasMany = array('Note');

	public $validate = array(
			'name' => array(
				'rule' => array('maxlength', 60),
				'required' => true,
				'allowEmpty' => false,
				'message' => 'タスク名を入力してください'
			),
			'body' => array(
				'rule' => array('maxlength', 255),
				'required' => true,
				'allowEmpty' => false,
				'message' => '詳細を入力してください'
			),
	);

}