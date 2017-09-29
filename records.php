<?php 
// $cookie_name="login";

// if (isset($_COOKIE['login'])) {
// 	echo "Welcome to the Admin dashboard".$_COOKIE['login'];
// }else{
// 	echo "Your session has expired.You need to login again";
// include connection to header
	include("includes/header.php");
// include connection to DB
	include("includes/connection.php");
	


?>

	<div class="container text-center">
		<h2>Details of the new registered members in the DB</h2>
		<table class="table table-striped table-bordered">
			<thead>
				<tr>
					<th>ID</th>
					<th>USERNAME</th>
					<th>PASSWORD</th>
					<th>PHONE</th>
				</tr>
			</thead>
			<tbody>
				<?php
				// Use the returned data if any
				// iterate the array result and use the data in the table 		
				$querydb= "SELECT * FROM 6470users";
				$results = mysqli_query($conn,$querydb);

					while ($row =mysqli_fetch_row($results)) {
						echo "<tr>
								<td>$row[0]</td>
								<td>$row[1]</td>
								<td>$row[2]</td>
								<td>$row[3]</td>
							</tr>";
					}
				 ?>
			</tbody>
		</table>
	</div>
</body>
</html>