<?php
session_start();
require "./connect.php";
// Remove all session variables

$id = $_SESSION["id"];

$sqlQ = "UPDATE account SET last_login=:last_login WHERE nik=:id";
$stmtQ = $conn->prepare($sqlQ);
$stmtQ->bindParam(':last_login', date('Y-m-d H:i:s'));
$stmtQ->bindParam(':id', $id);
$stmtQ->execute();

session_unset();

// Destroy the session
session_destroy();

// Back to Login Page
header("Location: ../index.php?stats=0");
?>