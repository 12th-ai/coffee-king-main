<?php
    session_start();
    include "./connection.php";
    if(isset($_SESSION["login"])){
        echo "<script>window.location.href='../dashboard/'</script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="../dashboard/f.css">
</head>
<body>
    <div class="content center-form">
        <form action="./handle.php" method="POST">
            <h3>SIGN IN</h3>
            <div class="form-grp">
                <label>Username</label>
                <input type="text" name="username" placeholder="Enter Your Username" required="">
            </div>
            <div class="form-grp">
                <label>Password</label>
                <input type="password" name="pswd" placeholder="Enter Password" required="">
            </div>
            <div class="btns">
                <button type="submit" name="signin" value="">Log In</button>
                <button type="reset">Reset</button>
            </div>
        </form>
    </div>

</body>
</html>