<?php

include('./classes/dbh.class.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-6">
                <div class="signup-form">
                    <form action="includes/signup.inc.php" method="POST">
                        <label for="">First Name</label> <br>
                        <input type="text" name="fName"> <br>
                        <label for="">Last Name</label> <br>
                        <input type="text" name="lName"> <br>
                        <label for="">Email</label> <br>
                        <input type="text" name="email"> <br>
                        <label for="">Username</label> <br>
                        <input type="text" name="username"> <br>
                        <label for="">Password:</label> <br>
                        <input type="password" name="password"> <br>
                        <label for="">Repeat password:</label> <br>
                        <input type="password" name="password_confirmation"> <br>
                        <input type="submit" name="submit" value="Sign Up">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>