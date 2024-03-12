<?php
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>dashboard</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
</head>
<body>
	<div class="container-fluid text-center">
		<div class="row ">
			<div class="col-md-12 ">
				<h2>
					welcome
					<?php
					echo $_SESSION['username'];
					?>
				</h2>
			</div>
		</div>
	</div>

</body>
</html>