<?php

include_once("model/Model.php");
class Controller {
	public $model;
	
	public function __construct()  
	{  
		$this->model = new Model();
	} 
	
	public function invoke()
	{

		$students = $this->model->fatch();

		include 'view/studentlist.php';

	}
}
?>