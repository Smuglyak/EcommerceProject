<?php

namespace app\controllers;

class Account extends \app\core\Controller{

    public function index()
    {
        $this->view('Account/index');
    }

    public function edit($account_id){
        $user = new \app\models\Account();
        $user = $user->getById($account_id);
        if(isset($_POST['action'])){
            $user->first_name = $_POST['first_name'];
            $user->last_name = $_POST['last_name'];
            $user->update();
            header('location:/Account/index');
        }
        else{
            $this->view('Account/edit', $user);
        }
    }

    public function checkHistory(){
        
    }

}