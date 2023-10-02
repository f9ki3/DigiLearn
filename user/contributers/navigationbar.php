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
            <!-- search -->
            <div class="search w-25 ">
                <div class="input-group  me-3">
                <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2">
                <button class="btn border">Search</button>
                </div>
            </div>
            <!-- search -->

            <!-- nav list -->
            <div class="nav-link">
            <button class="btn" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Upload</button>
            <button class="btn">Home</button>
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
    

<!-- Modal -->
<div class="modal mt-5 fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="staticBackdropLabel">Upload Learning Material</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mt-2">
        <label for="formFile" class="form-label">Title</label>
        <input type="text" class="form-control" placeholder="Write your title hre">
        </div>
        <div class="mt-2">
        <label for="formFile" class="form-label">Description</label>
        <input type="text" class="form-control" placeholder="Write your description hre">
        </div>
        <div class="mt-2">
        <label for="formFile" class="form-label">Upload File</label>
        <input class="form-control" type="file" id="formFile">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary">Upload</button>
      </div>
    </div>
  </div>
</div>

</body>
</html>