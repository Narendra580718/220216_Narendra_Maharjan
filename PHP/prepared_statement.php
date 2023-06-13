<?php
include("db.php");

// prepare and bind
$stmt = $conn->prepare("INSERT INTO customer (First_Name, Last_Name, Email, Phone_number, Address) VALUES (?, ?, ?, ?, ?)");
$stmt->bind_param("sssis", $First_Name, $Last_Name, $Email, $Phone_number, $Address);

// set parameters and execute
$First_Name = "Nisha";
$Last_Name = "Pandu";
$Email = "Nisha_dalle@gmail.com";
$Phone_number = 9881814560;
$Address = "Kuleshor";
$stmt->execute();

$First_Name = "Manjul";
$Last_Name = "Dahal";
$Email = "Nisha_d@gmail.com";
$Phone_number = 9888814560;
$Address = "Lokanthali";
$stmt->execute();

$First_Name = "Anamol";
$Last_Name = "Shrestha";
$Email = "Anamol_Motu@gmail.com";
$Phone_number = 9888884560;
$Address = "Sukhedhara";
$stmt->execute();


echo "New records created successfully";

$stmt->close();
$conn->close();
?>