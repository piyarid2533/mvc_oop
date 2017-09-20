<?php
class Model{

	public $connection;

	//Connect with database for mysql database
	public function __construct()
	{
		$this->connection = new mysqli("localhost","root","","test");

		if($this->connection->connect_errno){
			die("Connection Fail ".$this->connection->connect_error);
		}
		else{
			echo "Connected Database succefully<br>";
		}
	}// End of constructor



	//Fatch data by accepting table name and columns(1 dimentional array) name
	public function fatch(){
		//$columns=implode(",",$columns);
		$result=$this->connection->query("SELECT * FROM student");
	
		if($this->connection->errno){
			die("Fail Select".$this->connection->error);
		}

		//return tow dimentional array as required columns result
		return $result->fetch_all(MYSQLI_ASSOC);
	}
}

?>