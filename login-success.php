<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Success</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<body>
<div class="card">
  <h5 class="card-header">Login Status</h5>
  <div class="card-body">
    <h5 class="card-title">Successfully logged in!</h5>
    <h5 class="card-title">Welcome back!</h5>
    <p class="card-text">Your Username is: <?php echo $_GET['username']; ?></p>
    <p class="card-text">Your Email is: <?php echo $_GET['email']; ?></p>
    
    <a class="btn btn-primary" href="login-form.php" role="button">Back</a>
    <a class="btn btn-primary" href="registration-form.php" role="button">Registration Form</a>
</div>
</div>
</body>
</html>