<?php
include 'connect.php';
$id = $_GET["id"];
$sql = "DELETE FROM `users` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
  header("Location: homepage.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}