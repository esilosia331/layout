<?php

include 'includes/header.php';
?>


<div class="container mt-5">
    <h2 class="mb-4">Two-Factor Authentication</h2>
    <form method="post" action="php/2fa_post.php">
        <div class="mb-3">
            <label for="token" class="form-label">Enter Authentication Token</label>
            <input type="text" class="form-control" id="token" name="token" required autofocus>
        </div>
        <button type="submit" class="btn btn-primary">Verify</button>
    </form>
</div>




<?php
include 'includes/footer.php';
?>