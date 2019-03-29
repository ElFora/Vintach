   <?php
      $_SESSION['vari'];
   ?>
   <!-- Nav bar -->
   <?php if($_SESSION['vari']=='') 
   {
   ?>
    <nav class="navbar navbar-expand-lg navbar-dark" id="nav">
  <a class="navbar-brand" href="#">VINTACH</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cassettes.php">CASSETTES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="vhs.php">VHS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="checkout.php">CHECKOUT</a>
      </li>
    </ul>
    <div class="yellow-font">
    <ul class="navbar-nav" id="credentials">
        <li class="nav-item active">
            <a class="nav-link" href="signup.php">SIGN UP</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="login.php">LOGIN</a>
        </li>
    </ul>
    </div>
  </div>
  </nav>

   <?php } ?>

   <?php if($_SESSION['vari']=='cliente') 
   {
   ?>
    <nav class="navbar navbar-expand-lg navbar-dark" id="nav">
  <a class="navbar-brand" href="#">VINTACH</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cassettes.php">CASSETTES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="vhs.php">VHS</a>
      </li>
        <a class="nav-link" href="checkout.php">CHECKOUT</a>
      </li>
    </ul>
    <div class="yellow-font">
    <ul class="navbar-nav" id="credentials">
        <li class="nav-item active">
            <a class="nav-link" href="profile.php">PROFILE</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="logout.php">LOGOUT</a>
        </li>
    </ul>
    </div>
  </div>
  </nav>

   <?php } ?>

   <?php if($_SESSION['vari']=='admin') 
   {
   ?>
    <nav class="navbar navbar-expand-lg navbar-dark" id="nav">
  <a class="navbar-brand" href="index.php">VINTACH</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarResponsive">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">HOME</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="cassettes.php">CASSETTES</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="vhs.php">VHS</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="checkout.php">CHECKOUT</a>
      </li>
      </li>
        <a class="nav-link" href="users.php">USERS</a>
      </li>
      </li>
        <a class="nav-link" href="stock.php">INVENTORY</a>
      </li>
    </ul>
    <div class="yellow-font">
    <ul class="navbar-nav" id="credentials">
        <li class="nav-item active">
            <a class="nav-link" href="profile.php">PROFILE</a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="logout.php">LOGOUT</a>
        </li>
    </ul>
    </div>
  </div>
  </nav>

   <?php } ?>


    <!-- End Nav bar -->