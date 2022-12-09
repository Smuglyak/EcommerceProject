<?php

namespace app\controllers;

class Category extends \app\core\Controller{

	//#[\app\filters\Setup2fa]
	//#[\app\filters\Check2fa]
	public function index(){
		$menu = new \app\models\Category();
		$menus = $menu->getAllMenus();
		$combos = $menu->getAllCombos();	
		$this->view('Menu/index', ['menus'=>$menus, 'combos' => $combos]);;
	}

	// public function getMenus(){
	// 	$menu = new \app\models\Category();
	// 	$menu->category_type = 'Menu';
	// 	$menus = $menu->getByType($menu);	
	// 	$this->view('Menu/index', $menus);
	// }

	// public function getCombos(){
	// 	$combo = new \app\models\Category();
	// 	$combo->category_type = 'Combo';
	// 	$combos = $combo->getByType($combo);
	// 	$this->view('Menu/index', $combos);
	// }

	// public function getCombo($combo_id){
	// 	$combo = new \app\models\Category();
	// 	$combo = $combo->getById($combo_id)
	// 	$this->view('Menu/index', $combo);
	// }

	#[\app\filters\RoleForCategory]
	#[\app\filters\Login]
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
				header('location:/Category/addMenu?error='.$_POST['menu_name'].'" menu name already exist. Enter another name');
			}
		}
		else{
			$this->view('Menu/addMenu');
		}
	}

	#[\app\filters\Login]
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

	#[\app\filters\Login]
	public function details($menu_id){
		if(!isset($_GET['Order'])){
			$menu = new \app\models\Category();
			$menu = $menu->getById($menu_id);
			$food = new \app\models\Food();
			$foods = $food->getByCategoryUnordered($menu_id);
			$this->view('Menu/details', ['menu' => $menu, 'foods' => $foods]);
		} else {
			$food = new \app\models\Food();
			$foods = $food->getByCategory($_GET['Order'], $menu_id);
			$menu = new \app\models\Category();
			$menu = $menu->getById($menu_id);
			 $this->view('Menu/details', ['menu' => $menu, 'foods'=>$foods]);
		}	
	}

	#[\app\filters\RoleForCategory]
	#[\app\filters\Login]
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

	#[\app\filters\RoleForCategory]
	#[\app\filters\Login]
	public function delete($category_id){
		$menu = new \app\models\Category();
		$menu = $menu->getById($category_id);
		$menu->delete();
		header('location:/Category/index');
	}

	// public function sortByPrice()
	// {
		
	// }
}