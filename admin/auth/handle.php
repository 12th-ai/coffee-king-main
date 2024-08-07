<?php
    session_start();
    include "./connection.php";
    if(isset($_POST['signup'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $username = $_POST['username'];
        $pw = $_POST['pswd'];
        $insert = "INSERT INTO `admins` VALUES (NULL, '$fname', '$lname', '$gender', '$email','$username', '$phone', '$pw')"; 
        $sql = mysqli_query($conn, $insert);
        echo "<script>alert('Registered Successfully')</script>";
        echo "<script>window.location.href = 'index.php'</script>";
    }
    if(isset($_POST['signin'])){
        $username = $_POST['username'];
        $pw = $_POST['pswd'];
        $check = mysqli_query($conn, "SELECT * FROM `admins` WHERE Username = '$username' AND `Password` = '$pw'"); 

        if(mysqli_num_rows($check) > 0) {
            $getsql = mysqli_fetch_array($check);
            $id = $getsql['ID'];
            $name = $getsql['Username'];
            $position = $getsql['Position'];
            $image = $getsql['Img_Name'];
            $names = $getsql['First_Name'] . " " . $getsql['Last_Name'];
            $_SESSION["login"] = "1";
            // setcookie("adminname", $username,time() + (86400 * 2),"/");
            // setcookie("adminpw", $pw,time() + (86400 * 1), "/");
            echo "<script>alert('Log In Successful')</script>";
            echo "<script>window.location.href = '../dashboard/'</script>";
            $_SESSION["uid"] = $id;
            $_SESSION["uname"] = $name;
            $_SESSION["uposition"] = $position;
            $_SESSION["uimage"] = $image;
            $_SESSION["unames"] = $names;
            // echo mysqli_num_rows($sql);
        }else{
            echo "<script>alert('Account Not Found! Register To Proceed')</script>";
            echo "<script>window.location.href = 'signup.php'</script>";
        }
    }
    if(isset($_POST['addStudent'])){
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];
        $class = $_POST['class'];
        $regno = $_POST['regno'];
        $district = $_POST['district'];
        $village = $_POST['village'];
        // $age = $_POST['dob'];
        // mysqli_query($conn,"SELECT TIMEDIFF(), $age");
        $insert = "INSERT INTO `students` VALUES (NULL, '$fname', '$lname', '$gender', '$dob', '$class', '$regno', '$district', '$village')"; 
        $sql = mysqli_query($conn, $insert);
        echo "<script>alert('Student Added Successfully')</script>";
        echo "<script>window.location.href = './admin/students.php'</script>";
    }
    if(isset($_GET['logout'])) {
        session_destroy();
        echo "<script>alert('Log Out Successful')</script>";
        echo "<script>window.location.href='./'</script>";
    }
?>