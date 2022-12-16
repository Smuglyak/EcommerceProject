<?php

namespace app\controllers;

define("questions", ["What is your mother`s maiden name?" => "What is your mother`s maiden name?", "What is the name of your first pet?" => "What is the name of your first pet?", "What is your nickname when you were a kid?" => "What is your nickname when you were a kid?"]);

class Main extends \app\core\Controller
{

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

				header('location:/Main/setup2fa');
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
				} else {
					header('location:/Main/register?error=The username "' . $_POST['username'] . '" is already in use. Enter another username.');
				}
			} else {
				header('location:/Main/register?error=Passwords do not match.');
			}
		} else {
			$this->view('Main/register');
		}
	}

	public function addSecurityQuestion()
	{
		if (isset($_POST['action'])) {
			$question = new \app\models\SecurityQuestion();
			$question->account_id = $_SESSION['account_id'];
			$question->question = $_POST['question'];
			$question->answer = password_hash($_POST['answer'], PASSWORD_DEFAULT);
			$question->insert();
			header('location:/Main/login');
		} else {
			$this->view('Main/addSecurityQuestion');
		}
	}

	public function viewAccount()
	{
		$account = new \app\models\Account();
		$account = $account->get($_SESSION['username']);
		$this->view('Menu/index', $account);
	}

	public function findSecurityQuestion()
	{
		if (isset($_POST['action'])) {
			$user = new \app\models\Account();
			$user = $user->get($_POST['username']);
			$_SESSION['temp_account_id'] = $user->account_id;
			header('location:/Main/answerSecurityQuestion');
		} else {
			$this->view('Main/findSecurityQuestion');
		}
	}

	public function answerSecurityQuestion()
	{
		$question = new \app\models\SecurityQuestion();
		$question = $question->getQuestion($_SESSION['temp_account_id']);
		if (isset($_POST['action'])) {
			if (password_verify($_POST['answer'], $question->answer)) {
				$user = new \app\models\Account();
				$user = $user->getById($_SESSION['temp_account_id']);
				$_SESSION['name'] = $user->username;
				header('location:/Main/changePassword');
			} else {
				header('location:/Main/findSecurityQuestion?error=Wrong answer provided.');
			}
		} else {

			$this->view('Main/answerSecurityQuestion', ['question' => $question]);
		}
	}

	public function changePassword()
	{
		if (isset($_POST['action'])) {
			$account = new \app\models\Account();
			$account = $account->get($_SESSION['name']);
				if($_POST['password'] == $_POST['password_confirm']){
					$account->password_hash = password_hash($_POST['password'], PASSWORD_DEFAULT);
					$account->updatePassword();
					header('location:/Main/login?message=Password changed successfully.');
				} else{
					header('location:/Main/changePassword?error=Passwords do not match.');
			}
		}
			else{
				$this->view('Main/changePassword');
			}
	}

	#[\app\filters\Login] 
    public function setup2fa(){     
        if(isset($_POST['action'])){         
            $currentcode = $_POST['currentCode'];         
            if(\app\core\TokenAuth6238::verify($_SESSION['two_fa_code'],$currentcode)){ 
                //the user has verified their proper 2-factor authentication setup             
                $user = new \App\models\Account();             
                $user->account_id = $_SESSION['account_id'];             
                $user->two_fa_code = $_SESSION['two_fa_code'];             
                $user->update2fa();             
                header('location:/Category/index');         
            }
            else{             
                header('location:/Main/setup2fa?error=token not verified!');//reload         
            }     
        }
        else{         
            $two_fa_code = \app\core\TokenAuth6238::generateRandomClue();         
            $_SESSION['two_fa_code'] = $two_fa_code;         
            $url = \App\core\TokenAuth6238::getLocalCodeUrl($_SESSION['username'],'Awesome.com', $two_fa_code, 'Awesome App');
            $this->view('Main/twofasetup', $url);     
        } 
    } 

    #[\app\filters\Login]
    public function check2fa(){
        if(isset($_POST['action'])){
            $currentcode = $_POST['currentCode'];
            if(\app\core\TokenAuth6238::verify($_SESSION['two_fa_code'],$currentcode)){
                $_SESSION['two_fa_code'] = null;
                header('location:/Category/index');
            }
        }
        else{
            $this->view('Main/check2fa');
        }
    }

    public function makeQRCode(){  
        $data = $_GET['data'];  
        \QRcode::png($data); 
    } 

	public function logout()
	{
		// Destroy all session variables
		session_unset();
		global $logged_in;
		$logged_in = false;  
		// Destroy the session cookie
		if (ini_get("session.use_cookies")) {
			$params = session_get_cookie_params();
			setcookie(
				session_name(),
				'',
				time() - 42000,
				$params["path"],
				$params["domain"],
				$params["secure"],
				$params["httponly"]
			);
		}
		
		session_destroy();

		header('location:/Main/index');
	}
}
