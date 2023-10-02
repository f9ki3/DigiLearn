<?php
if (isset($_GET['email'])) {
  $email = urldecode($_GET['email']); // Retrieve and decode the email parameter
  $username = urldecode($_GET['username']); // Retrieve and decode the email parameter
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Verify</title>
    <link rel="stylesheet" href="assets/css/login.css">
    <link rel="stylesheet" href="assets/css/verify.css">
    <link rel="icon" type="image/x-icon" href="assets/images/brain.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <?php include 'navigationbar.php';?>
    <div class="container-sm">
      <div class="row justify-content-center align-items-center mt-5">
        <div class="col-lg-4">
          <form action="functions/verify.php" method="POST" class="d-block w-100 rounded mt-5 p-4">
            <h1 style="font-size: 45px" class="fw-bold my-3 text-center mt-4">Verify</h1>
            <div class="verify">
              <input type="hidden" name="email" value="<?php echo $email; ?>">
              <input type="hidden" name="username" value="<?php echo $username; ?>">
              <input type="text" style="text-align: center" name="a" placeholder="0" class="code1 form-control m-2" maxlength="1" oninput="moveToNextInput(this, 'b')">
              <input type="text" style="text-align: center" name="b" placeholder="0" class="code1 form-control m-2" maxlength="1" oninput="moveToNextInput(this, 'c')">
              <input type="text" style="text-align: center" name="c" placeholder="0" class="code1 form-control m-2" maxlength="1" oninput="moveToNextInput(this, 'd')">
              <input type="text" style="text-align: center" name="d" placeholder="0" class="code1 form-control m-2" maxlength="1">
            </div>
            <button type="submit" style="background-color: rgb(62, 0, 133); height: 45px" class="mt-4 btn btn-primary w-100 my-1 border-0 mb-3">Register</button>
            <?php if(isset($_GET["failed"]) && $_GET["failed"] === "true"){ ?>   
              <div class="message-container rounded mb-3">
                <p class="error-message text-center mt-2" style="color: red">Verification Failed</p>
              </div>
            <?php }else{; ?>
              <div class="">
                <p class="" style="color: white;">_</p>
              </div>
            <?php }?>
            <p class="mt-2" style="text-align: center; font-size: 14px;">Note: Please check your e-mail DigiLearn sent OTP code to verify your account.</p>
          </form>
        </div>
      </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

    <script>
    document.addEventListener("input", function(event) {
    if (event.target.classList.contains("code1")) {
      const inputValue = event.target.value;
      if (inputValue.length > 1) {
        event.target.value = inputValue.slice(0, 1);
      }
      
      if (inputValue.length === 1) {
        event.target.nextElementSibling.focus();
      }
    }
  });
    </script>
  </body>
</html>

<?php
}
?>

