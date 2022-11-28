<?php

namespace app\controllers;

class History extends \app\core\Controller
{
//added specific account to history. Have to solve the account connection problem first(How to access specific account) 
    public function index($account_id)
    {
        $account = new \app\models\Account();
        $account = $account->get($account_id);
        $this->view('History/index', $account);
    }

    public function edit()
    {
    }

    public function checkHistory()
    {
    }
}
