<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Login Form</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>
<style>
.btn-color{
  background-color: #0e1c36;
  color: #fff;
  
}

.profile-image-pic{
  height: 200px;
  width: 200px;
  object-fit: cover;
}



.cardbody-color{
  background-color: #ebf2fa;
}

a{
  text-decoration: none;
}
        </style>

<body>
<div class="container">
    <div class="row">
      <div class="col-md-6 offset-md-3">
        <h2 class="text-center text-dark mt-5">Login Form</h2>
        <div class="card my-5">

          <form method="POST" action="login.php" class="card-body cardbody-color p-lg-5">

            <div class="mb-3">
			<label class="form-label" for="sample-identifier">Enter Username/Email</label>
              <input type="text" class="form-control" id="sample-identifier" aria-describedby="emailHelp"
                placeholder="User Name" name="identifier">
            </div>
            <div class="mb-3">
			<label class="form-label" for="sample-password">Enter Password:</label>
              <input type="password" id="sample-password" class="form-control" name="password" placeholder="password">
            </div>
            <div class="text-center"><button type="submit" class="btn btn-color px-5 mb-5 w-100" name="login-user">Login</button></div>
            <div id="emailHelp" class="form-text text-center mb-5 text-dark">Not
              Registered? <a href="registration-form.php" class="text-dark fw-bold" role="button"> Create an
                Account</a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>


</body>
</html>