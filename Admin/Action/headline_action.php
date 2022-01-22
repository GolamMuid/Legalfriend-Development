<?php
include '../config.php';

$headlines = $_POST['headlines'];


$sql = "UPDATE headlines SET headlines= '$headlines' WHERE id=1";

if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}

$conn->close();
 header("refresh:0; url=../headline.php");
?>
