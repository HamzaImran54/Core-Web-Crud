
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <style>
        .divider:after,
.divider:before {
content: "";
flex: 1;
height: 1px;
background: #eee;
}
.h-custom {
height: calc(100% - 73px);
}
@media (max-width: 450px) {
.h-custom {
height: 100%;
}
}
    </style>
</head>
<body>
    <section class="vh-100">
        <div class="container-fluid h-custom">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
              <img src="assets/images/login_img02.png"
                class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
              <form method="post" action="login.php">
              <center> <h1>Log In</h1></center>

                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
                  
                  
                </div>
      
                <div class="divider d-flex align-items-center my-4">
                  
                </div>
      
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3" name="email" class="form-control form-control-lg"
                    placeholder="Enter a valid email address" />
                  <!-- <label class="form-label" for="form3Example3">Email address</label> -->
                </div>
      
                <!-- Password input -->
                <div class="form-outline mb-3">
                  <input type="password" name="password" id="form3Example4" class="form-control form-control-lg"
                    placeholder="Enter password" />
                  <!-- <label class="form-label" for="form3Example4">Password</label> -->
                </div>
      
                <div class="d-flex justify-content-between align-items-center">
                  <!-- Checkbox -->
                  <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                    <label class="form-check-label" for="form2Example3">
                      Remember me
                    </label>
                  </div>
                  <!-- <a href="#!" class="text-body">Forgot password?</a> -->
                </div>
      
                <div class="text-center text-lg-start mt-4 pt-2">
                  <button type="submit" class="btn btn-primary btn-lg"
                    style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                
                </div>
      
              </form>
            </div>
          </div>
        </div>
      </div>
         
         
          <div>
            <a href="#!" class="text-white me-4">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#!" class="text-white me-4">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#!" class="text-white me-4">
              <i class="fab fa-google"></i>
            </a>
            <a href="#!" class="text-white">
              <i class="fab fa-linkedin-in"></i>
            </a>
          </div>
          <!-- Right -->
        </div>
      </section>
</body>
</html>

<?php
// Include the database connection file
require_once "connection.php";
session_start();
// If user is already logged in, redirect to dashboard
if(isset($_SESSION['user_id'])){
  header('Location: dashboard.php');
  exit();
}


if (isset($_POST['email']) && isset($_POST['password'])) {

  $email = $_POST['email'];
  $password = $_POST['password'];
  $query = "SELECT * FROM admin WHERE user_name = '$email' && password = '$password'";
  $result = mysqli_query($conn, $query);

  if (mysqli_num_rows($result) == 1) {

      $_SESSION['user_id'] = mysqli_fetch_assoc($result)['id'];
      header('Location: dashboard.php');
      exit();
  } else {
      // Login failed
      echo '<script>
      Swal.fire({
        title: "Opps..?",
        text: "Wrong Credentials",
        icon: "question",
        confirmButtonText: "OK"
      })
      </script>';
  }
}

?>