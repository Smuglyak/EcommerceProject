<?php
namespace app\controllers;

class Main extends \app\core\Controller{
	public function index(){
		//To see interesting publications, as a person or user, I can see a list of all ppublications, most recent first.

		//get all data from model and pass it to the view as parameter
		// $publication = new \app\models\Publication();
		// $publications = $publication->getAll();
		$this->view('Main/index');
	}

	public function index2(){
		$this->view('Main/index2');
	}
}