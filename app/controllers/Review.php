<?php

namespace app\controllers;

class Review extends \app\core\Controller{

	public function index(){
		
	}

	public function addReview($food_id){
		if(isset($_POST['action'])){
			$review = new \app\models\Review();
			$review->account_id = $_SESSION['account_id'];
			$review->food_id = $food_id;
			$review->rating = $_POST['rating'];
			$review->comment = $_POST['comment'];
			$review->insert();
			header('location:/Food/viewFood?message=Review added!');
		}
		else{
			$this->view('Review/addReview');
		}
	}

	public function editReview($review_id){
		$review = new \app\models\Review();
		$review = $review->get($review_id);
		if(isset($_POST['action'])){
			$review->rating = $_POST['rating'];
			$review->comment = $_POST['comment'];
			$review->account_id = $_SESSION['account_id']
			$review->update();
			header('location:/Food/viewFood');
		}
		else{
			$this->view('Review/editReview', $review);
		}
	}

	public function deleteReview($review_id){
		$review = new \app\models\Review();
		$review->review_id = $review_id;
		$review->deleteReview();
		header('location:/Food/viewFood');
	}
}