<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="content center-form">
        <form action="./handle.php" method="POST">
            <h3>SIGN UP</h3>
            <div class="form-grp">
                <div class="form-grp-in">
                    <div class="form-grp-inner-sp">
                        <label>First Name</label>
                        <input type="text" name="fname" placeholder="Enter First Name" required="">
                    </div>
                    <div class="form-grp-inner-sp">
                        <label>Last Name</label>
                        <input type="text" name="lname" placeholder="Enter Last Name" required="">
                    </div>
                </div>
            </div>
            <div class="form-grp">
                <label>Select Gender</label>
                <div class="form-grp-in">
                    <div class="form-grp-inner">
                        <input type="radio" value="Male" name="gender" id="male" required="">
                        <label for="male">Male</label>
                    </div>
                    <div class="form-grp-inner">
                        <input type="radio" value="Female" name="gender" id="female" required="">
                        <label for="female">Female</label>
                    </div>
                </div>
            </div>
            <div class="form-grp">
                <label>Email</label>
                <input type="email" name="email" placeholder="Enter Your Email" required="">
            </div>
            <div class="form-grp">
                <div class="form-grp-in">
                    <div class="form-grp-inner-sp">
                        <label>Phone Number</label>
                        <input type="text" name="phone" placeholder="Enter Phone Number" pattern="[0-9]+" required="">
                    </div>
                </div>
            </div>
            <div class="form-grp">
            </div>
            <div class="form-grp">
                <div class="form-grp-in">
                    <div class="form-grp-inner-sp">
                        <label>Create Username</label>
                        <input type="text" name="username" placeholder="Create Username" required="">
                    </div>
                    <div class="form-grp-inner-sp">
                        <label>Create Password</label>
                        <input type="password" name="pswd" placeholder="Create Password" required="">
                    </div>
                </div>
            </div>
            <div class="btns">
                <button type="submit" name="signup" value="">Create Account</button>
                <button type="reset">Reset</button>
            </div>
        </form>
    </div>

</body>

</html>