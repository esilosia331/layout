<?php

include 'includes/header.php';

?>

<head>
  <title>Login</title>

  <!-- link to my stylesheet -->
  <link href="css/style.css" rel="stylesheet" />

  <!-- link to bootstrap -->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr"
    crossorigin="anonymous" />
</head>

<body>
  <div class="container">
    <h2>Login</h2>
    <form action="login.php" method="POST">
      <label class="form-label" for="username">Username:</label>
      <input class="form-control" type="text" id="username" name="username" required>

      <label class="form-label" for="password">Password:</label><br>
      <input class="form-control" type="password" id="password" name="password" required><br>
      <a href="forgot-password.html">Forgot Password?</a><br><br>

      <!-- <input class="form-control" type="submit" value="Login"> -->

      <button type="Login" class="btn btn-primary">Save</button>
    </form>
  </div>
<?php
include 'includes/footer.php';  
?>