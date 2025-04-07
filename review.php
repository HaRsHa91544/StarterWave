<?php
  $conn = mysqli_connect("localhost", "root", "", "review");
  $name = $_POST['name'];
  $review = $_POST['review'];
  mysqli_query($conn, "INSERT INTO review(name, review) values ('$name', '$review')");
  header("Location: index.php");
?>