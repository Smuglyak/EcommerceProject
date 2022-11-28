<?php

namespace app\controllers;

define("questions", ["What is your mother's maiden name?"=>"What is your mother's maiden name?", "What is the name of your first pet?"=>"What is the name of your first pet?", "What is your nickname when you were a kid?"=>"What is your nickname when you were a kid?"]);

class Main extends \app\core\Controller{

	public function index()
	{
		$this->view('Main/index');
	}

	public function login()
	{
		if (isset($_POST['action'])) {
			$account = new \app\models\Account();
			$account = $account->get($_POST['username']);
			if (password_verify($_POST['password'], $account->password_hash)) {
				$_SESSION['account_id'] = $account->account_id;
				$_SESSION['username'] = $account->username;
				$_SESSION['role'] = $account->role;
				$_SESSION['first_name'] = $account->first_name;
				$_SESSION['last_name'] = $account->last_name;
				header('location:/Category/index');
			} else {
				header('location:/Main/login?error=Wrong username/password combination!');
			}
		} else {
			$this->view('Main/login');
		}
	}

	public function register()
	{
		if (isset($_POST['action'])) {
			if ($_POST['password'] == $_POST['password_confirm']) {
				$account = new \app\models\Account();
				$check = $account->get($_POST['username']);
				if (!$check) {
					$account->username = $_POST['username'];
					$account->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
					$account->first_name = $_POST['first_name'];
					$account->last_name = $_POST['last_name'];
					$_SESSION['account_id'] = $account->insert();
					$_SESSION['username'] = $_POST['username'];
					header('location:/Main/addSecurityQuestion');
				}else{
					header('location:/Main/register?error=The username "'.$_POST['username'].'" is already in use. Enter another username.');
				}
			} else {
				header('location:/Main/register?error=Passwords do not match.');
			}
		} else {
			$this->view('Main/register');
		}
	}

	public function addSecurityQuestion(){
		if(isset($_POST['action'])){
			$question = new \app\models\SecurityQuestion();
			$question->account_id = $_SESSION['account_id'];
			$question->question = $_POST['question'];
			$question->answer = $_POST['answer'];
			$question->insert();
			header('location:/Main/viewAccount');
		}
		else{
			$this->view('Main/addSecurityQuestion');
		}
	}

	public function viewAccount(){
		$account = new \app\models\Account();
		$account = $account->get($_SESSION['username']);
		$this->view('Menu/index', $account);
		//idl what you mean by viewAccount
	}

	public function changePassword(){
		if(isset($_POST['findQuestion'])){
			$question = new \app\models\SecurityQuestion();
			$question = $question->getQuestion($_POST['username']);
		if(isset($_POST['changePass'])){
			$account = new \app\models\Account();
			$account = $account->get($_POST['username']);
			if($_POST['answer'] == $question->answer){
				if($_POST['password'] == $_POST['password_confirm']){
					$account->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
					$account->updatePassword();
					header('location:/Main/viewAccount?message=Password changed successfully.');
				} else {
					header('location:/Main/changePassword?error=Passwords do not match.');
				}
			}
			else{
				header('location:/Main/changePassword?error=Wrong answer provided.');
			}
		}
		else{
			header('location:/Main/changePassword?error=Wrong username provided.');
		}
	}
		else{
			$this->view('Main/changePassword');
		}
	}

	public function logout()
	{
		session_destroy();
		header('location:/Main/index');
	}
}
