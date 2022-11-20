<?php

namespace app\controllers;

class Category extends \app\core\Controller{

	public function index(){
		$menu = new \app\models\Category();
		$menus = $menu->getAll();	
		$this->view('Menu/index', $menus);
	}

	public function addMenu(){
		if(isset($_POST['action'])){
			$menu = new \app\models\Category();
			$check = $menu->getByName($_POST['menu_name']);
			if(!$check){
				$menu->category_name = $_POST['menu_name'];
				$menu->type = $_POST['type'];

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

	public function details($menu_id){
		$menu = new \app\models\Category();
		$menu = $menu->get($menu_id);
		$this->view('Menu/details', $menu);
	}

	public function edit($menu_id){
		$menu = new \app\models\Category();
		$menu = $menu->get($menu_id);
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
	// 	$menu->deleteAssignFood();
	// 	$menu->delete();
	// 	header('location:/Menu/index');
	// }
}