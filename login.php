<?php

include('./includes/header.php');


?>

<?php if(isset($_SESSION['is_logged']) && $_SESSION['is_logged'] == true) : ?>
<?php header('Location:dashboard.php'); ?>
<?php elseif(isset($_SESSION['is_logged']) && $_SESSION['is_logged'] == false ): ?>
<div class="container">
    <p class="text-danger">Invalid Creditentials</p>
    <div class="row">
        <div class="col-6">
            <div class="signup-form">
                <form action="./includes/login.inc.php" method="POST">
                    <label for="">Email</label> <br>
                    <input type="text" name="email"> <br>
                    <label for="">Password:</label> <br>
                    <input type="password" name="password"> <br>
                    <input type="submit" name="submit" value="Log In">
                </form>
            </div>
        </div>
    </div>
</div>
<?php elseif(!isset($_SESSION['is_logged'])): ?>
<div class="container">
    <div class="row">
        <div class="col-6">
            <div class="signup-form">
                <form action="./includes/login.inc.php" method="POST">
                    <label for="">Email</label> <br>
                    <input type="text" name="email"> <br>
                    <label for="">Password:</label> <br>
                    <input type="password" name="password"> <br>
                    <input type="submit" name="submit" value="Log In">
                </form>
            </div>
        </div>
    </div>
</div>
<?php endif ?>

