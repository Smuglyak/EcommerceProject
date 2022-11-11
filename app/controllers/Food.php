<?php

namespace app\controllers;

class Food extends \app\core\Controller{

	public function index(){
		
	}

	//Not Finished
	public function add(){
		if(isset($_POST['action'])){
			$newFood = new \app\models\Food();
			$foodMenu = new \app\models\FoodMenu();
			$newFood->food_name = $_POST['food_name'];
			$newFood->food_description = $_POST['food_description'];
			$newFood->price = $_POST['price'];
			$filename = $this->saveFile($_FILES['picture']);
			$newFood->picture = $filename;
			$newFood->insert();
			$food = $food->getByName($_POST['food_name']);
			$foodMenu->food_id = $food->food_id;
			$foodMenu->menu_id = $_POST['menu_id'];
			$foodMenu->insert();
			header('location:/Menu/index/');
		}
		else{
			$menu = new \app\models\Menu();
			$menus = $menu->getAll();
			$this->view('Food/addFood', $menus);
		}
	}

	public function edit($food_id){
		$food = new \app\models\Menu();
		$food = $food->getById($food_id);
		if(isset($_POST['action'])){
			$filename = $this->saveFile($_FILES['picture']);
			if($filename){
				unlink("images/$food->picture");
				$food->picture = $filename;
			}
			$food->food_name = $_POST['food_name'];
			$newFood->food_description = $_POST['food_description'];
			$newFood->price = $_POST['price'];
			$food->update();
			header('location:/Menu/index');
		}
		else{
			$this->view('Menu/editFood', $food);
		}
	}

	//Not Finished
	public function delete(){
		if(isset($_POST['action'])){
			$food = new \app\models\Food();
			$food->food_id = $_POST['food_id'];
			$food->delete();
			header('location:/Menu/index');
		}else{
			$food = new \app\models\Food();
			$foods = $food->getAll();
			$this->view("Food/deleteFood",$foods);
		}
		
	}

}