<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.8/css/all.css"> -->
<?php 
	include_once("functions.php");
	// include_once("database.php");

	 include_once('connection.php');
	
	 $product = Models\Product::find(1);
echo "<pre>";
	 dd($product->user());

	 if(isset($_POST['register'])){
  		$fname=$_POST['fname'];
  		$lname=$_POST['lname'];
  		$sex=$_POST['sex'];
        $email = $_POST['email'];
        $city=$_POST['city'];
        $country="Pakistan";
        $password = $_POST['password'];
        $auth = new Models\Auth();
        $message = $auth->register($_POST);

        ?>
        <div class="alert alert-<?php echo $message['status']; ?>"><?php echo $message['message'] ?></div>
        <?php 
    }

 ?>
 <?php // include_once("header.php"); ?>

<div class="container">
<br>  <p class="text-center">Welcome To Hafiz Brothers Admin Panel <a href=""></a></p>
<hr>


<div class="row justify-content-center">
<div class="col-md-6">
<div class="card">
<header class="card-header">
	<a href="http://localhost/hafiz/login-form.php" class="float-right btn btn-outline-primary mt-1">Log in</a>
	<h4 class="card-title mt-2">Sign up</h4>
</header>
<article class="card-body">
<form action="registration-form.php" method="post">
	<div class="form-row">
		<div class="col form-group">
			<label>First name </label>   
		  	<input type="text" class="form-control" placeholder="" name="fname">
		</div> <!-- form-group end.// -->
		<div class="col form-group">
			<label>Last name</label>
		  	<input type="text" class="form-control" placeholder=" " name="lname">
		</div> <!-- form-group end.// -->
	</div> <!-- form-row end.// -->
	<div class="form-group">
		<label>Email address</label>
		<input type="email" class="form-control" placeholder="" name="email">
		<small class="form-text text-muted">We'll never share your email with anyone else.</small>
	</div> <!-- form-group end.// -->
	<div class="form-group">
		<label>Sex</label>
		<input type="text" class="form-control" placeholder="" name="sex">
	</div> <!-- form-group end.// -->
	<div class="form-row">
		<div class="form-group col-md-6">
		  <label>City</label>
		  <input type="text" class="form-control" name="city">
		</div> <!-- form-group end.// -->
		<div class="form-group col-md-6">
		  <label>Country</label>
		  <select id="inputState" class="form-control" name="country">
		    <option> Choose...</option>
		      <option>Uzbekistan</option>
		      <option>Russia</option>
		      <option selected="">United States</option>
		      <option>India</option>
		      <option>Afganistan</option>
		  </select>
		</div> <!-- form-group end.// -->
	</div> <!-- form-row.// -->
	<div class="form-group">
		<label>Create password</label>
	    <input class="form-control" type="password" name="password">
	</div> <!-- form-group end.// -->  
    <div class="form-group">
        <button type="submit" name="register" class="btn btn-primary btn-block"> Register  </button>
    </div> <!-- form-group// -->      
    <small class="text-muted">By clicking the 'Sign Up' button, you confirm that you accept our <br> Terms of use and Privacy Policy.</small>                                          
</form>
</article> <!-- card-body end .// -->
<div class="border-top card-body text-center">Have an account? <a href="http://localhost/hafiz/login-form.php">Log In</a></div>
</div> <!-- card.// -->
</div> <!-- col.//-->

</div> <!-- row.//-->


</div> 
<!--container end.//-->

<?php include_once("footer.php") ?>

