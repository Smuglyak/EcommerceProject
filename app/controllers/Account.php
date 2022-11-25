<?php

namespace app\controllers;

class Account extends \app\core\Controller{

    public function index()
    {
        $account = new \app\models\Account();
        $this->view('Account/index');
    }

    public function edit(){
        $this->view('Account/edit');
    }

    public function checkHistory(){

    }

}

?>