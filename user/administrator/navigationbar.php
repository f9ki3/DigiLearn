<?php
include '../../config.php';
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DigiLearn Login</title>
    <link rel="stylesheet" href="../../assets/css/navigationbar.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>

<nav class=" fixed-top ">
   <div class="pt-3 px-3 pb-3" width="20%">
         <!-- logo -->
        <div class="logo">
            <h3 class="fw-bold">DigiLearn</h3>
        </div>
        <!-- logo -->

        <div class="list-link">

            <!-- nav list -->
            <div class="nav-link">
            <button class="btn ">+ Upload</button>
            <button class="btn">Dashboard</button>
            <button class="btn">Notification</button>

            
            <div class="btn-group">
            <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                <img class="profile" src="../../assets/images/fyke.jpg" alt="">
            </button>
            <ul class="dropdown-menu dropdown-menu-end">
                <li><a class="dropdown-item" href="profile.php">Profile</a></li>
                <li><a class="dropdown-item" href="settings.php">Settings</a></li>
                <li><a class="dropdown-item" href="logout.php">Logout</a></li>
            </ul>
            </div>
            </div>
            <!-- nav list -->
        </div>
   </div>
</nav>
    

</body>
</html>