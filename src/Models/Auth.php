<?php

namespace Models;

class Auth{
    public static function isLoggedIn()
    {
        return isset($_SESSION['login_user']);
    }
    public function login($email, $password)
	{
//		 TODO: mintain session here
      	$query = User::where(['email' => $email, 'password' => $password]);
      	if($query->exists()){
            $_SESSION['login_user']= $email;
            header("Location: add-product.php");
            exit;
        }
        header("Location:login-form.php?message=invalid credentials");
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


    public static function redirectToProductPage()
    {
        header("Location: add-product.php");
    }
//    public function ChangePassword($password,$email){
//
//        $user = User::find(1);
//        $user->password= $password;
//        $user->save();
//
//    }

    public function ChangePassword($data){
        $error="danger";
        $messages=['status'=>'success'];
        $n_password = $data['new_password'];
        $c_password = $data['confirm_password'];
        $email=$data['email'];
        if(empty($n_password)){
            $messages['status']=$error;
            $messages['messages']['new_password']="New Password Field is Empty";
        }
        if(empty($c_password)){
            $messages['status']=$error;
            $messages['messages']['confirm_password']="Confirm Password Field is Empty";
        }

        if ($n_password != $c_password) {
            $messages['status']=$error;
            $messages['messages']['nsame']="Password Not Match";
        }
        $n_passwordmd5=md5($n_password);
//        $old_password =User::where("email",$data['email']);
        $old_password = User::find(1);
        if($old_password->password == $n_passwordmd5){
            $messages['status']=$error;
            $messages['messages']['old_password']="Use a Different Password";
        }
            if($messages['status'] == $error){
                return compact(  'messages');
            }
        $user = User::find(1);
        $user->password= $n_passwordmd5;
        $user->save();
        $messages['messages']['update']="Password Update Successfully";
        return compact('messages');

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
