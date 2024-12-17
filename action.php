<?php

$dbhost = "localhost";
$dbuname = "root";
$dbpass = "";
$dbname = "starterwave";
$conn = mysqli_connect($dbhost, $dbuname, $dbpass, $dbname);

if ($conn) {
    $name = $_POST['name'];
    $mobile = $_POST['mobile'];
    $mail = $_POST['mail'];
    $project = $_POST['project'];
    $description = $_POST['description'];
    $sql = "INSERT INTO clientrequests (name,mobile,mail,pname,description) VALUES('$name',$mobile,'$mail','$project','$description')";
    $result = mysqli_query($conn, $sql);
    header("Location: submit.html");
    exit();
} 

else {
    echo "Connection failed";
}
?>