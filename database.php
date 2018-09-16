<?php 
// 
class Database
{
	// public $servername = "localhost";
	// public $username = "root";
	// public $password = "";
	// public $db = "hafiz";

	function __construct()
	{

try {

			$servername = "localhost";
			$username = "root";
			$password = "";
			$db = "hafiz";
			$conn = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
			// $conn = mysqli_connect($servername,$username,$password,$db);

			// return $conn;
	
  // $conn = new PDO("mysql:host=" .$this->servername.";dbname=".$this->db, $this->username, $this->password);

 
   // set the PDO error mode to exception
 
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
   	// echo "Connected successfully";
	   }
	 
	catch(PDOException $e)
	 
	   {
	 
	   echo "Connection failed: " . $e->getMessage();
	 
	   }

	}

 
 
 
 
  

}
 
?>
