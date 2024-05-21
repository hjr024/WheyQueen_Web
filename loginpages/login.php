<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Whey Queen Supplement | Log-in</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="https://cdn.glitch.com/e4fa8393-6a2f-4f21-8abc-dbe8b105143b%2FLOGO%20FINAL.png?v=1619803347662">
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link rel="stylesheet" type="text/css" href="login.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
  </head>
  <body>
    <div class="container px-4 py-5 mx-auto">
      <div class="card card0">
        <div class="d-flex flex-lg-row flex-column-reverse">
          <div class="card card1">
            <div class="row justify-content-center my-auto">
              <div class="col-md-8 col-10 my-5">
                <div class="row justify-content-center px-3 mb-3">
                  <img
                    id="logo"
                    src="https://cdn.glitch.com/ae863586-3d6b-465c-ae7f-17912f1fa67e%2FWHEYQUEENLOGO.png?v=1619456324511"
                  />
                </div>
                <h3 class="mb-5 text-center heading">
                  Whey Queen Suppplements
                </h3>
                <h6 class="msg-info">Please login to your account</h6>
                
                <form action="validation.php" method="post">
                <div class="form-group">
                  <label class="form-control-label text-muted">Username</label>
                  <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="Email or Username"
                    class="form-control"
                    required
                  
                  />
                </div>
                <div class="form-group">
                  <label class="form-control-label text-muted">Password</label>
                  <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="Password"
                    class="form-control"
                    required
                  />
                </div>
                <div class="row justify-content-center my-3 px-3">
                  <input class="btn-block btn-color" type="submit" name="" value="Login">

                </div>
                <div class="row justify-content-center my-2">
                  <a href="#"
                    ><small class="text-muted">Forgot Password?</small></a
                  >
                </div>
              </div>
            </div>
            </form>
            <!-- <form id="login-form" class="login-form" action="validation.php" method="post">
									<h1>Welcome User</h1>
						 		 		 <div class="field">
											 <input class="txtb" type="email" id="email" name="email" placeholder="Email Address" required>
								 			 <input class="txtb" type="password" id="password" name="password" placeholder="Password" required>
							 			</div>
							  			<div class="content">
											<div class="checkbox">
								 				<input type="checkbox" id="remember-me">
								  				<label for="remember-me">Remember me</label>
											</div>
											<div class="pass-link">
												 <a href="#">Forgot password?</a></div>
								  			</div>
						   					<input class="login-btn" type="submit" name="" value="Login">
						 		</form> -->

            <div class="bottom text-center mb-5">
              <p href="#" class="sm-text mx-auto mb-3">
                Don't have an account?<button onclick="window.location.href= 'signup.php' " class="btn btn-white ml-2">
                  Create new
                </button>
              </p>
            </div>
          </div>
          <div class="card card2">
            <div class="my-auto mx-md-5 px-md-5 right">
              <h3 class="text-white">Whey Queen Supplements</h3>
              <small class="text-white"
                >Whey Queen Supplements was Established on April 20, 2006 By Mr Edward James Ballacillio. Our goal is to motivate everyone who want to be fit and healthy. To provide a quality service and products to all of the customers we will have. We will assure that all of the customers who will avail our services and products will meet their satisfaction and expectation. Whey Queen Supplement is not just a store but also a home for all of the body builders, Intructors, Mentors, Coaches and etc.</small
              >
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
