<?php

$dbhost = "localhost";
$dbuname = "";
$dbpass = "";
$dbname = "starterwave";
$conn = mysqli_connect($dbhost, $dbuname, $dbpass, $dbname);


if ($conn) {
    session_start();
    $_SESSION['name'] = $name;
    $_SESSION['mobile'] = $mobile;
    $_SESSION['mail'] = $mail;
    $_SESSION['project'] = $project;
    $_SESSION['desc'] = $description;
    if (isset($_POST['submit'])) {
        $name = trim($_POST['name']);
        $mobile = (int)trim($_POST['mobile']);
        $mail = trim($_POST['mail']);
        $project = trim($_POST['project']);
        $description = trim($_POST['description']);

        if (empty($name)) {
            $_SESSION['ename'] = "Name is required.";
            header("Location: index.php");
        } elseif (!preg_match("/^[a-zA-Z\s]+$/", $name)) {
            $_SESSION['ename'] = "Name can only contain letters and spaces.";
            header("Location: index.php");
        }

        if (empty($mobile)) {
            $_SESSION['emobile'] = "Mobile number is required.";
            header("Location: index.php");
        } elseif (!preg_match("/^[0-9]{10}$/", $mobile)) {
            $_SESSION['emobile'] = "Mobile number must be a valid 10-digit number.";
            header("Location: index.php");
        }

        if (empty($mail)) {
            $_SESSION['email'] = "Email is required.";
            header("Location: index.php");
        } elseif (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $_SESSION['email'] = "Invalid email format.";
            header("Location: index.php");
        }

        if (empty($project)) {
            $_SESSION['eproject'] = "Project name is required.";
            header("Location: index.php");
        }

        if (empty($description)) {
            $_SESSION['edescription'] = "Project description is required.";
            header("Location: index.php");
            exit();
        }
        header("Location: mail.php");
        $sql = "INSERT INTO clientrequests (name,mobile,mail,pname,description) VALUES('$name',$mobile,'$mail','$project','$description')";
        $result = mysqli_query($conn, $sql);
        exit();
    }
} else {
    echo "Connection failed";
}
