<?php

namespace app\controllers;

class Main extends \app\core\Controller{

	public function index(){
		$this->view('Main/index');
	}

	public function register(){

		$this->view('Main/register');
	}

	public function viewMain(){

		$this->view('Main/viewMain');
	}

	public function changePassword(){

		$this->view('Main/changePassword');
	}
}