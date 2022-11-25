<?php

namespace app\controllers;

class Account extends \app\core\Controller{

    public function index()
    {
        $account = new \app\models\Account();
        $account = $account->getById($_SESSION['account_id']);
        $this->view('Account/index', $account);
    }

    public function getFavorite()
    {
        $favorite = new \app\models\Favorite();
        $favorite = $favorite->getByAccount($_SESSION['account_id']);
        $this->view('Account/viewFavorite', $favorite);
    }
    

    public function edit($account_id)
    {
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