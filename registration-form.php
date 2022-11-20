<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration Form</title>
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<style>
.gradient-custom-3 {
background: #84fab0;


background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5));


background: linear-gradient(to right, rgba(132, 250, 176, 0.5), rgba(143, 211, 244, 0.5))
}
.gradient-custom-4 {
background: #84fab0;


background: -webkit-linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1));


background: linear-gradient(to right, rgba(132, 250, 176, 1), rgba(143, 211, 244, 1))
}
</style>

<body>

<section class="vh-100 bg-image"
  style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
  <div class="mask d-flex align-items-center h-100 gradient-custom-3">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-9 col-lg-7 col-xl-6">
          <div class="card" style="border-radius: 15px;">
            <div class="card-body p-5">
              <h2 class="text-uppercase text-center mb-5">Create an account</h2>

              <form method="POST" action="register.php">

                <div class="form-outline mb-4">
				<label class="form-label" for="sample-username">Username</label>
		<input type="text" id="sample-username" class="form-control" name="username"/>
                </div>

                <div class="form-outline mb-4">
				<label class="form-label" for="sample-email">Email</label>
		<input type="email" id="sample-email" class="form-control" name="email"/>
                </div>

                <div class="form-outline mb-4">
				<label class="form-label" for="sample-password">Password</label>
		<input type="password" id="sample-password" class="form-control" name="password"/>
                </div>

                <div class="form-outline mb-4">
				<label class="form-label" for="confirm-password">Confirm Password</label>
		<input type="password" id="confirm-password" class="form-control" name="confirm-password"/>
                </div>

                <div class="d-flex justify-content-center">
				<button type="submit" class="btn btn-primary" name="register-user">Register</button>
                </div>

                <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="login-form.php"
                    class="fw-bold text-body"><u>Login here</u></a></p>

              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

</body>
</html>