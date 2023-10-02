<?php
include 'config.php';
?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DigiLearn Register</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="icon" type="image/x-icon" href="assets/images/brain.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
  <?php include 'navigationbar.php'; ?>
    <div class="container-sm">
      <div class="row justify-content-center align-items-center mt-5">
        <div class="col-lg-4">
          <form action="functions/register.php" method="POST" class="d-block w-100 rounded mt-5 p-4" id="registration-form">
            <h1 style="font-size: 45px" class="fw-bold my-3 text-center mt-4">Register</h1>
            <input required type="text" name="username" placeholder="Username" class="form-control my-2">
            <input required type="Email" name="email" placeholder="E-mail" class="form-control my-2">
            <input required type="password" id="password" name="password" placeholder="Password" class="form-control my-2" onkeyup="validatePassword()">
            <input required type="password" id="confirmPassword" placeholder="Confirm Password" class="form-control my-2" onkeyup="validatePassword()">
            <p id="password-strength"></p>
            <button type="submit" style="background-color: rgb(62, 0, 133); height: 45px" class="btn btn-primary w-100 my-1 border-0 mb-3" id="register-button">
              Register
            </button>
            <?php if(isset($_GET["failed"]) && $_GET["failed"] === "true"){ 
              $message = urldecode($_GET['message']);
            ?>   
            <div class="message-container rounded mb-3">
              <p class=" error-message text-center mt-2" style="color: red"><?php echo $message?></p>
            </div>
            <?php } else { ?>
            <div class="">
              <p class="" style="color: white;">_</p>
            </div>
            <?php } ?>
          </form>
        </div>
      </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <script src="assets/javascript/register_pass_validation.js"></script>
    <script>
      document.getElementById("registration-form").addEventListener("submit", function () {
        var registerButton = document.getElementById("register-button");
        registerButton.innerHTML = '<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Registering...';
        registerButton.disabled = true;
      });
    </script>
  </body>
</html>