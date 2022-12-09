<?php

namespace app\controllers;

define("ratings", ["1" => "1", "2" => "2", "3" => "3", "4" => "4", "5" => "5"]);

class Review extends \app\core\Controller{

	public function index(){
		
	}
	
	#[\app\filters\Login]
	public function addReview($food_id){
		if(isset($_POST['action'])){
			$review = new \app\models\Review();
			$review->account_id = $_SESSION['account_id'];
			$review->food_id = $food_id;
			$review->rating = $_POST['rating'];
			$review->comment = $_POST['comment'];
			$review->insert();
			header('location:/Food/viewFood/'. $food_id . '?message=Review added!');
		}
		else{
			$this->view('Review/addReview');
		}
	}

	// public function editReview($review_id){
	// 	$review = new \app\models\Review();
	// 	$review = $review->get($review_id);
	// 	if(isset($_POST['action'])){
	// 		$review->rating = $_POST['rating'];
	// 		$review->comment = $_POST['comment'];
	// 		$review->account_id = $_SESSION['account_id']
	// 		$review->update();
	// 		header('location:/Food/viewFood');
	// 	}
	// 	else{
	// 		$this->view('Review/editReview', $review);
	// 	}
	// }

	#[\app\filters\Login]
	public function deleteReview($review_id){
		$check = new \app\models\Review();
		$check = $check->checkReview($review_id);
		if($check->username == $_SESSION['username']){
			$review = new \app\models\Review();
			$review->review_id = $review_id;
			$review->delete();
			header('location:/Food/viewFood/'. $_SESSION['temp_food_id']);
		}
		else{
			header('location:/Food/viewFood/'. $_SESSION['temp_food_id'] . "?error=You cannot delete a review that is not yours!");
		}
	}
}