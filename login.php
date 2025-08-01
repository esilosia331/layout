<?php

include 'includes/header.php';

?>

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