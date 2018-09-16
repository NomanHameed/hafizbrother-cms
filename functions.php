<?php 
	include_once("database.php");
	include_once('connection.php');
	
	/**
	 * 
	 */
	class Main
	{
		public $conn;
		
		function __construct()
		{
			// $databasecon= new Database();
		
		}

		public function GetUser($email,$password)
		{
			if (!empty($email) && !empty($password)) {
				// $salt = '$2a$07$R.gJb2U2N.FmZ4hPp1y2CN$';
				// $uname=$_POST['username'];
				// $password = crypt($_POST['password'], $salt);
				$return = array();
				$query = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
			try {
				$query->execute();
				for ($i = 0; $row = $query->fetch(); $i++) {
					$return[$i] = array();
					foreach ($row as $key => $rowitem) {
					$return[$i][$key] = $rowitem;
					}
				}
			} catch (PDOException $e) {
					echo $e->getMessage();
				}
					if (!empty($return) && !empty($return[0])) {
						$this->loginSuccess();
					} else {
						echo $error = $this->loginFail();
					}
				
		}
	}
		public function loginSuccess()
		{
		// header('Location: http://' . $_SERVER['SERVER_NAME'] .'/admin/posts.php');
			header('Location: http://localhost/hafiz/add-product.php');
			return;
		}
		public function loginFail()
		{
		return 'Your Username/Password was incorrect';
		}
		function register($fname,$lname,$email,$sex,$city,$country,$password1)
		{
				$servername = "localhost";
			$username = "root";
			$password = "";
			$db = "hafiz";
			$conn = mysqli_connect($servername,$username,$password,$db);
			$sql="INSERT into users(FirstName,LastName,Email,Sex,City,Country,Password) VALUES ('$fname','$lname','$email','$sex','$city','$country','$password1')";
			if (mysqli_query($conn,$sql)) {
    		echo "New record created successfully";
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}

		}
		public function Login($username,$password)
		{
            $error = 'danger';
            $messages=['status' => 'success'];
            if(empty($username)){
                $messages['status']=$error;
                $messages['messages']="Please Enter Email Address";
            }

			$user = Models\User::where(['Email' => $username, 'Password' => $password])->first();
			dd($user);




				$servername = "localhost";
			$username = "root";
			$password = "";
			$db = "hafiz";
			$conn = mysqli_connect($servername,$username,$password,$db);
					$sql="SELECT * FROM users WHERE email = '$username' AND password = '$password'";
		if (mysqli_query($conn,$sql)) {
					$callc=new Main;
	    			$callc->loginSuccess();
		} else {
		    echo "Error: " . $sql . "<br>" . $conn->error;
		}					
		}
		public function getall()
		{
			$servername = "localhost";
			$username = "root";
			$password = "";
			$db = "hafiz";
			$conn = mysqli_connect($servername,$username,$password,$db);
					$sql="SELECT * FROM users";
					$run=mysqli_query($conn,$sql);
					// $fields=array();
					// while($fields=mysqli_fetch_array($run)){
					// 	$fields[]=$fetch['email'];
					// }
					mysqli_fetch_all($run,MYSQLI_ASSOC);
					

					return $fields;


		}
	}
