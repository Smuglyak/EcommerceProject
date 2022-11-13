<?php

namespace app\controllers;

class Main extends \app\core\Controller{

	public function index(){
		$this->view('Main/index');
	}

	public function login(){
		if(isset($_POST['action'])){
			$account = new \app\models\Account();
			$account = $account->get($_POST['username']);
			if(password_verify($_POST['password'], $account->password_hash)){
				$_SESSION['account_id'] = $account->account_id;
				$_SESSION['username'] = $account->username;
				$_SESSION['role'] = $account->role;
				header('location:/Menu/index');
			}else{
				header('location:/Main/login?error=Wrong username/password combination!');
			}
		}
		else{
			$this->view('Main/login');
		}
	}

	public function register(){
		if(isset($_POST['action'])){
			if($_POST['password'] == $_POST['password_confirm']){
				$account = new \app\models\Account();
				$check = $account->get($_POST['username']);
				if(!$check){
					$account->username = $_POST['username'];
					$account->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
					$account->first_name = $_POST['first_name'];
					$account->last_name = $_POST['last_name'];
					$_SESSION['user_id'] = $account->insert();
					$_SESSION['username'] = $_POST['username'];
					header('location:/Menu/index');
				}else{
					header('location:/Main/register?error=The username "'.$_POST['username'].'" is already in use. Enter another username.');
				}
			}
			else{
				header('location:/Main/register?error=Passwords do not match.');
			}
		}
		else{
			$this->view('Main/register');
		}
	}

	public function viewAccount(){
		$account = new \app\models\Account();
		$account = $account->get($_SESSION['username']);
		$this->view('Main/viewAccount', $account);
	}

	public function changePassword(){
		if(isset($_POST['action'])){
			$account = new \app\models\Account();
			$account = $account->get($_SESSION['username']);
			if(password_verify($_POST['old_password'],$account->password_hash)){
				if($_POST['password'] == $_POST['password_confirm']){
					$account->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
					$account->updatePassword();
					header('location:/Main/viewAccount?message=Password changed successfully.');
				}
				else{
					header('location:/Main/changePassword?error=Passwords do not match.');
				}
			}
			else{
				header('location:/Main/changePassword?error=Wrong old password provided.');
			}
		}
		else{
			$this->view('Main/changePassword');
		}
	}

	public function logout(){
		session_destroy();
		header('location:/Main/index');
	}
}