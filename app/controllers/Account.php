<?php

namespace app\controllers;

class Account extends \app\core\Controller{

	public function index(){

		$this->view('Account/index');
	}

	public function register(){

		$this->view('Account/register');
	}

	public function viewAccount(){

		$this->view('Account/viewAccount');
	}

	public function changePassword(){

		$this->view('Account/changePassword');
	}
}