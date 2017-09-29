<?php 
$cookie_name ="login";

// include connection to header
	include("includes/header.php");
// include connection to DB
	include("includes/connection.php");

	if (isset($_POST['login'])) {
		$name =$_POST['username'];
		$pass =$_POST['password'];

	$query="SELECT * FROM 6470users WHERE USERNAME='$name' AND PASSWORD_HASH='$pass';";
	$results=mysqli_query($conn,$query);
	$count =mysqli_num_rows($results);
	print_r($count);
	if ($count==1) {
		// setcookie($cookie_name,$name,time()+340,'/','',1);
		// //echo "Welcome ".$name ;
		// header("Location: records.php");
		header("Location: records.php");
		// echo "Success...redirecting....";
	}else{
		echo "Wrong username and password! " . mysqli_error($conn);
		
	}

	}
 ?>
	<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4 text-center">
				<h1>Login</h1>
				<form action="login.php" method="POST">
					<div class="input-group-lg">
						<input type="text" name="username" class="form-control" placeholder="username" required><br />
						<input type="password" name="password" class="form-control" placeholder="password" required><br />
						<input type="submit" name="login" value="Log in" class="btn btn-lg btn-block btn-primary"><br />
						<a href="#"><i>i forgot my password</i></a><br />
						Not a member,click <a href="register.php">here</a> to register.
					</div>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
</body>
</html>