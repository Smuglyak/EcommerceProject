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
        $food = new \app\models\Food();
        $foods = $food->getAll();
        $favorite = new \app\models\Favorite();
        $favorites = $favorite->getByAccount($_SESSION['account_id']);       
        $this->view('Favorite/index',['foods'=>$foods, 'favorites'=>$favorites]);
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
        $this->view('Account/index');
    }

    public function checkHistory(){

    }

}