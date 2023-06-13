<?php

include_once("db.php");

$sql = "INSERT INTO customer (First_Name, Last_Name, Email, Phone_number, Address)
VALUES ('Manjul','Dahal', 'hecker@example.com', ' ','lokanthali')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>