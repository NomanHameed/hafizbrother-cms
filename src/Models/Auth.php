<?php

namespace Models;
use Models\User;
//session_start();
class Auth{
	public function login($email, $password)
	{
//		 TODO: mintain session here
		$query = User::where(['Email' => $email, 'password' => $password]);
		if($query->exists()){

            $_SESSION['login_user']= $email;
            return $query->first();
		}
        $this->logout();
		return false;
	}

	public function logout()
	{
		/* destroy session and redirect to home page*/
        session_destroy();
        header("Location:login-form.php");
	}

	public function register($userArray)
	{
		$user = new User();
		$user->email = $userArray['email'];
		$user->first_name = $userArray['fname'];

		$user->last_name = $userArray['lname'];

		//$user->Sex = $userArray['sex'];
		$user->country = $userArray['country'];
		$user->city = $userArray['city'];
		$user->password = $userArray['password'];

		$user->save();
		return ['status' => 'warning', 'message' => "New User Created"];
	}

}



class Message {

	public function showSuccessMessage($message)
	{
		$this->showMessage($message);
	}


	public function showMessage($message, $status = 'success')
	{
		?>
		 <div class="alert alert-<?php echo $status; ?>"><?php echo $message; ?></div>
     
		<?php 
	}

	public function showErrorMessage($message)
	{
		$this->showMessage($message, 'error');
	}

	public function showWarningMessage($message)
	{
		$this->showMessage($message, 'warning');
	}

}
