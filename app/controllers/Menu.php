<?php

namespace app\controllers;

class Menu extends \app\core\Controller{

	public function index(){
		$this->view('Menu/index');
	}

	public function add(){
		if(isset($_POST['action'])){
			$menu = new \app\models\Menu();
			$check = $menu->getByName($_POST['menu_name']);
			if(!$check){
				$menu->menu_name = $_POST['menu_name'];
				$menu->insert();
				header('location:/Menu/index?message=Menu created!');
			}
			else{
				header('location:/Menu/add?error='.$_POST['menu_name'].'" menu/combo already exist. Enter another name');
			}
		}
		else{
			$this->view('Menu/addMenu');
		}
	}

	public function edit($menu_id){
		$menu = new \app\models\Menu();
		$menu = $menu->get($menu_id);
		if(isset($_POST['action'])){
			$menu->menu_name = $_POST['menu_name'];
			$menu->update();
			header('location:/Menu/index');
		}else{
			$this->view('Menu/editMenu', $menu);
		}
	}

	public function delete($menu_id){
		$menu = new \app\models\Menu();
		$menu->menu_id = $menu_id;
		$menu->deleteFoodMenu();
		$menu->delete();
		header('location:/Menu/index');
	}
}