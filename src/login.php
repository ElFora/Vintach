<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Vintache</title>
</head>
<body class="signup"> 
    <!-- Nav bar -->
    <?php include("includes/nav.php");?>
    <!-- End Nav bar -->

    <!-- Container -->
<div class="container sign-up">
  <!-- tittle -->
  <div class="row tittle-signup">
    <div class="col-lg-12">
      <h1>SIGN UP</h1>
      <div class="rectangle"></div>
  </div>
</div>

  <div class="row">
    <div class="col-lg-8">
      <div class="sign-up">
          <div class="photo-container">
              <img src="images/girl.jpg">
          </div> 
        </div>  
    </div>
    <div class="col-lg-4">
      <div class="form-thing">
          <form class="sign-up-form">
              <div class="form-group">
                <label for="formGroupExampleInput">Name</label>
                <input type="text" class="form-control" name="user-name" id="formGroupExampleInput" placeholder="Name">
              </div>
              <div class="form-group">
                <label for="formGroupExampleInput">Address</label>
                <input type="text" class="form-control" name="user-address" id="formGroupExampleInput" placeholder="Address">
              </div>
              <div class="form-group">
                  <label for="exampleFormControlInput1">Email</label>
                  <input type="email" class="form-control" name="user-mail" id="exampleFormControlInput1" placeholder="name@example.com">
              </div>
              <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="user-pwd" id="exampleInputPassword1" placeholder="Password">
              </div>
              <button type="button" name="register-btn" class="btn btn-custom">become a member</button>
          </form>
      </div>
    </div>  
  </div>
</div>
</body>
</html>