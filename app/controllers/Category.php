<?php

namespace app\controllers;

class Category extends \app\core\Controller{

	public function index(){
		$menu = new \app\models\Category();
		$menus = $menu->getAll();
		$this->view('Menu/index', $menus);
	}

	public function getMenus(){
		$menu = new \app\models\Category();
		$menu->category_type = 'Menu'
		$menus = $menu->getByType($menu);	
		$this->view('Menu/index', $menus);
	}

	public function getCombos(){
		$combo = new \app\models\Category();
		$combo->category_type = 'Combo'
		$combos = $combo->getByType($combo);
		$this->view('Menu/index', $combos);
	}

	public function addMenu(){
		if(isset($_POST['action'])){
			$menu = new \app\models\Category();
			$check = $menu->getByName($_POST['menu_name']);
			if(!$check){
				$menu->category_name = $_POST['menu_name'];
				$menu->category_type = 'Menu';
				$menu->insert();
				header('location:/Category/index');
			}
			else{
				header('location:/Menu/addMenu?error='.$_POST['menu_name'].'" menu name already exist. Enter another name');
			}
		}
		else{
			$this->view('Menu/addMenu');
		}
	}

	public function addCombo(){
		if(isset($_POST['action'])){
			$menu = new \app\models\Category();
			$check = $menu->getByName($_POST['menu_name']);
			if(!$check){
				$menu->category_name = $_POST['menu_name'];
				$menu->category_type = 'Combo';

				$menu->insert();
				header('location:/Menu/index?message=Combo created!');
			}
			else{
				header('location:/Menu/addCombo?error='.$_POST['menu_name'].'" combo name already exist. Enter another name');
			}
		}
		else{
			$this->view('Menu/addCombo');
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
			$menu->menu_name = $_POST['menu_name'];
			$menu->update();
			header('location:/Menu/index');
		}else{
			$this->view('Menu/editMenu', $menu);
		}
	}

	// public function delete($category_id){
	// 	$menu = new \app\models\Category();
	// 	$menu->menu_id = $menu_id;
	// 	$menu->deleteFoodMenu();
	// 	$menu->delete();
	// 	header('location:/Menu/index');
	// }
}