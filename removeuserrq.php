<?php

include 'config.php';

$id = $_GET['id'];

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }


  // sql to delete a record
$sql = "DELETE FROM users WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: removeuser.php');
} else {
  echo "Error deleting record: " . $conn->error;
}

$conn->close();

?>