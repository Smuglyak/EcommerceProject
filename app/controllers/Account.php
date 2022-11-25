<?php

namespace app\controllers;

class Account extends \app\core\Controller{

    public function index()
    {
        $accounts = new \app\models\Account();
        $accounts = $accounts->getAll();
        $this->view('Account/index', $accounts);
    }

    public function edit($account_id){
        
        $this->view('Account/edit', [$account_id]);
    }

    public function checkHistory(){

    }

}

?>