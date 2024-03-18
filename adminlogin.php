<?php
// Database connection
$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name = 'lawyermanagement';

$conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// User registration handling
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Password hashing
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // SQL query to insert email and hashed password into the database
    $sql = "INSERT INTO adminlogin (email, password) VALUES (?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('ss', $email, $hashed_password);

    if ($stmt->execute()) {
		header("Location:user_registerbk.php");
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
<!doctype html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!-- Bootstrap CSS -->
		<!--<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"> -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
		<link rel="stylesheet" href="css/all.css">
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/media.css">
		<title>User registration</title>
<style>
  .has-error .help-block {
  color: red;
}
.log{
	margin-top:-67px;
	margin-left:500px;
}
.bg-success {
    background-color: #244065!important;
}

.registerform {
    margin: 160px 0px;
}

.customnav a {
    margin: 9px -101px;
	font-size:25px;
}

body {
  background-image: url('asset/img/hero/h1_hero.jpg');
  background-repeat: no-repeat;
  background-size: cover; /* or 'contain' depending on your needs */
  
}
</style>

	</head>
	<body style="height:400px;">
	<header class="customnav bg-success">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<nav class="navbar navbar-expand-lg ">
							<a class="navbar-brand cus-a" href="#">Lawyer Up</a>
							<div class="collapse navbar-collapse" id="navbarSupportedContent">
								
							</div>
						</nav>
					</div>
				</div>
			</div>
		</header>
		<section class="registerform">
			<center>
				<div class="log">
					<div class="container">
						<div class="row">
							<div class="col-md-6">
								<img src="login.png">
								<form action="adminloginbk.php" method="POST"  id="validateForm">
									<div class="form-group">
										<label for="email" style="margin-right:500px;">Email</label>
										<input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
									</div>
									<div class="form-group">
										<label for="password" style="margin-right:500px;">Password</label>
										<input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
									</div>
									<input name="register" type="submit" class="btn btn-block btn-success" value="Login" style="background-color: #244065; align-item:center; justify-content:center; color:white;" />
									<!-- Redirect to login page after successful registration -->
									<!-- <a href="user_loginbk.php" style="text-align:center; text-decoration:none; color:black;"><p>Already have an account? Login</p></a> -->
								</form>
							</div>
						</div>
					</div>
				</div>
			</center>
		</section>
		
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		<script src='http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js'></script>
		<script src='http://cdnjs.cloudflare.com/ajax/libs/bootstrap-validator/0.4.5/js/bootstrapvalidator.min.js'></script>
       
	</body>
</html>
