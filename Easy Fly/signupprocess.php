<?php
include 'db.php';
$name = $_REQUEST["rname"];
$email = $_REQUEST["rusername"];
$phone = $_REQUEST["rphone"];
$password = $_REQUEST["rpassword"];

try {
    $stmt = $conn->prepare("INSERT INTO reg(name, email, phone, password) VALUES (?, ?, ?, ?)");
    $stmt->execute([$name, $email, $phone, $password]);
    header("Location: login.php");
    exit();
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
