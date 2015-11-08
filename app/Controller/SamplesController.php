<?php

// app/Controller/SamplesController.php
App::uses('CakeEmail', 'Network/Email');

class SamplesController extends AppController {

	public function index() {

		$email = new CakeEmail();

// 		$email->transport('Debug');
		$email->transport('Mail');

		$email->from('kotobukijisan2003@gmail.com');
		$email->to('kotobukijisan2003@gmail.com');

		$email->subject('これはテストメールです');
		$messages = $email->send('これはテストメールの本文です。');

		$this->set('messages', $messages);
	}
}