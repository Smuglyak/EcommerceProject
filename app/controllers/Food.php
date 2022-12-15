<?php

namespace app\controllers;

class Food extends \app\core\Controller{

	public function index(){
		$food = new \app\models\Food();
		$foods = $food->getAll();
		$this->view('Food/index', $foods);
	}

	#[\app\filters\RoleForProduct]
	#[\app\filters\Login]
	public function addFood(){
		if(isset($_POST['action'])){
			$newFood = new \app\models\Food();
			// $foodMenu = new \app\models\FoodMenu();
			$newFood->food_name = $_POST['food_name'];
			$newFood->food_description = $_POST['food_description'];
			$newFood->price = $_POST['price'];
			$filename = $this->saveFile($_FILES['picture']);
			$newFood->is_available = "True";
			$newFood->picture = $filename;
			$_SESSION['food_id'] = $newFood->insert();
			// $getFood->food_id = $getFood->getByName($_POST['food_name']);
			// $foodMenu->food_id = $getFood->food_id;
			// $foodMenu->menu_id = $_POST['menu_id'];
			// $foodMenu->insert();
			header('location:/Food/assignFood');
		}
		else{
			$this->view('Food/addFood');
		}
	}

	#[\app\filters\RoleForProduct]
	#[\app\filters\Login]
	public function editFood($food_id)
	{
		$food = new \app\models\Food();
		$food = $food->getById($food_id);
		if (isset($_POST['action'])) {
			$filename = $this->saveFile($_FILES['picture']);
			if($filename){
				if(isset($_SESSION['filename']))
					unlink("images/$_SESSION[filename]");
				$_SESSION['filename'] = $filename;
				$_SESSION['oldFile'] = $food->picture;
				$food->picture = $filename;
			}elseif(isset($_SESSION['filename'])){
				$food->picture = $_SESSION['filename'];
			}
			$food->food_name = $_POST['food_name'];
			$food->food_description = $_POST['food_description'];
			$food->price = $_POST['price'];
			$food->update();
			header('location:/Food/index');
		} else {
			$this->view('Food/editFood', ['food'=>$food]);
		}
	}

	#[\app\filters\RoleForProduct]
	#[\app\filters\Login]
	public function delete($food_id){
		$food = new \app\models\Food();
		$food = $food->getById($food_id);
		// $food->deleteAssignFood();
		// $food->is_available = 'False';
		$food->delete();
		header('location:/Food/index/');
	}


	public function viewFood($food_id){
		$food = new \app\models\Food();
		$food = $food->getById($food_id);
		$review = new \app\models\Review();
		$reviews = $review->getAllForFood($food_id);
		$_SESSION['temp_food_id'] = $food_id;
		$this->view('Food/viewFood', ['food'=>$food,'reviews'=>$reviews]);
	}

	#[\app\filters\RoleForProduct]
	#[\app\filters\Login]
	public function assignFood(){
		if(isset($_POST['action'])){
			$food = new \app\models\Food();
			$category_id = new \app\models\Category();
			$category_id = $category_id->category_id;
			$postCategory = $_POST['category_id'];
			$category_id = $postCategory;
			$assignFood = new \app\models\AssignFood();
			//where do you get food id and category id sessions?
			$assignFood->food_id = $_POST['food_id'];
			$assignFood->category_id = $category_id;
			$assignFood->insert();
			header('location:/Food/index/');
		}
		else {
			$menu = new \app\models\Category();
			$menus = $menu->getAllMenus();
			$combo = new \app\models\Category();
			$combos = $menu->getAllCombos();
			$food = new \app\models\Food();
			$foods = $food->getAllAvailable();
			$this->view('Food/assignFood', ['menus'=>$menus,'foods'=>$foods, 'combos'=>$combos]);
		}
	}

	public function search(){
		//To find interesting publications, as a person or user, I can search for captions by search terms.
		$food = new \app\models\Food();
		$foods = $food->search($_GET['search_term']);
		$this->view('Food/index', $foods);
	}

}