<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Whey Queen Supplement | Sign Up</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="https://cdn.glitch.com/e4fa8393-6a2f-4f21-8abc-dbe8b105143b%2FLOGO%20FINAL.png?v=1619803347662">
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link rel="stylesheet" type="text/css" href="signup.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css" />
  </head>
  <body>
    <div class="container px-4 py-5 mx-auto">
      <div class="card card0">
        <div class="row justify-content-center my-auto">
          <div class="col-md-8 col-10 my-5">
            <div class="row justify-content-center px-3 mb-3">
              <img
                id="logo"
                src="https://cdn.glitch.com/ae863586-3d6b-465c-ae7f-17912f1fa67e%2FWHEYQUEENLOGO.png?v=1619456324511"
              />
            </div>
            <h1 class="mb-5 text-center heading">
              Whey Queen Suppplements
            </h1>

            <form action="registration.php" method="post">
              <h1>Sign Up</h1>
              <p>Please fill in this form to create an account.</p>
              <hr />

              <label for="email"><b>Email</b></label>
              <input
                type="text"
                placeholder="Enter Email"
                name="email"
                required
              />

              <label for="psw"><b>Password</b></label>
              <input
                type="password"
                placeholder="Enter Password"
                name="password"
                required
              />

              <label for="psw-repeat"><b>Repeat Password</b></label>
              <input
                type="password"
                placeholder="Repeat Password"
                name="password-repeat"
                required
              />

              <label>
                <input
                  type="checkbox"
                  checked="checked"
                  name="remember"
                  style="margin-bottom:15px"
                />
                Remember me
              </label>

              <p>
                By creating an account you agree to our
                <a href="#" style="color:dodgerblue">Terms & Privacy</a>.
              </p>

              <div class="clearfix">
                <button
                  onclick="window.location.href='login.php'"
                  type="button"
                  class="cancelbtn"
                >
                  Cancel
                </button>
                <button type="submit" class="signupbtn">Sign Up</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
