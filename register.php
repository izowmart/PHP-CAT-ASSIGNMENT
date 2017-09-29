<?php 
ob_start();
	include("includes/header.php");
	// include connection to DB
	include("includes/connection.php");

	if (isset($_POST['submit'])) {
		$name=$_POST['username'];
		$pass=$_POST['password'];
		$phone=$_POST['phone'];

		$query ="INSERT INTO 6470users SET ID ='',USERNAME='$name',PASSWORD_HASH='$pass',PHONE='$phone';";

		$data=mysqli_query($conn,$query);
		if (!$data) {
			echo "Data not entered! ". mysqli_error($conn);
		}else{
			echo "Data entered successful";
			header("Location: login.php");
			
		}
	}
 ?>
		<div class="row">
			<div class="col-md-4"></div>
			<div class="col-md-4 text-center">
				<h1>Register here</h1>
				<form action="register.php" method="POST">
					<div class="input-group-lg">
						<input type="text" name="username" class="form-control" placeholder="username" required><br />
						<input type="password" name="password" class="form-control" placeholder="password" required><br />
						<input type="number" name="phone" class="form-control" placeholder="phone" required><br />
						<input type="submit" name="submit" value="Submit details" class="btn btn-lg btn-block btn-primary"><br />
						<a href="#"><i>i forgot my password</i></a><br />
					</div>
				</form>
			</div>
			<div class="col-md-4"></div>
		</div>
	</div>
</body>
</html>
