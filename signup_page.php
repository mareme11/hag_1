<?php

include("header.php");
include("navbar.php");

?>

<div class="card">
    <div class="card-body">
        <h2 class="card-title">Login</h2>
        <form method="post" action="">
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username" required>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div> <br>

            <button type="submit" class="btn btn-primary">Sign Up</button>
        </form>
    </div>
</div>
<?php
//include("navbar.php");
include("footer.php");
?>