<?php
include("db.php");

// sql to delete a record
$sql = "DELETE FROM customer WHERE Customer_ID=6";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>

