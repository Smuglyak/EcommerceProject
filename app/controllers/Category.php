<?php

namespace app\controllers;

class Category extends \app\core\Controller{

	public function index(){
		$menu = new \app\models\Category();
		$menus = $menu->getAllMenus();
		$combos = $menu->getAllCombos();	
		$this->view('Menu/index', ['menus'=>$menus, 'combos' => $combos]);
	}

	public function addMenu(){
		if(isset($_POST['action'])){
			$menu = new \app\models\Category();
			$check = $menu->getByName($_POST['menu_name']);
			if(!$check){
				$menu->category_name = $_POST['menu_name'];
				$menu->category_description = $_POST['menu_description'];
				$menu->category_type = $_POST['menu_type'];
				$menu->insert();
				header('location:/Category/index');
			}
			else{
				header('location:/Menu/add?error='.$_POST['menu_name'].'" menu/combo already exist. Enter another name');
			}
		}
		else{
			$this->view('Menu/addMenu');
		}
	}

	public function details($menu_id){
		$menu = new \app\models\Category();
		$menu = $menu->getById($menu_id);
		$this->view('Menu/details', $menu);
	}

	public function edit($menu_id){
		$menu = new \app\models\Category();
		$menu = $menu->getById($menu_id);
		if(isset($_POST['action'])){
			$menu->category_name = $_POST['menu_name'];
			$menu->category_description = $_POST['menu_description'];
			$menu->category_type = $_POST['menu_type'];
			$menu->update();
			header('location:/Category/index');
		}else{
			$this->view('Menu/editMenu', $menu);
		}
	}

	public function menuLink(){
		$this->view('Menu/menuLink');
	}

	public function delete($category_id){
		$menu = new \app\models\Category();
		$menu = $menu->getById($category_id);
		$menu->delete();
		header('location:/Category/index');
	}
}