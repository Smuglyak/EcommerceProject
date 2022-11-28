<?php

namespace app\controllers;

class Account extends \app\core\Controller{

    public function index()
    {
        $account = new \app\models\Account();
        $account = $account->get($_SESSION['username']);
        $this->view('Account/index', $account);
    }

    public function edit(){
        $account = new \app\models\Account();
        $account = $account->get($_SESSION['username']);
        if (isset($_POST['action'])) {
            $account->username = $_POST['username'];
            $account->first_name = $_POST['first_name'];
            $account->last_name = $_POST['last_name'];
            $_SESSION['username'] = $account->username;
            $_SESSION['first_name'] = $account->first_name;
            $_SESSION['last_name'] = $account->last_name;
            $account->update();
            header('location:/Account/index');
            // $this->view('Account/edit', $account);
        } else {
            $this->view('Account/edit', $account);
        }
    }

    public function checkHistory(){

    }

}

?>