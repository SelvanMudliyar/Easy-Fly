<?php
include 'db.php';

$adminemail = $_REQUEST["rusername"];
$password = $_REQUEST["rpassword"];

try {
    $stmt = $conn->prepare("SELECT * FROM admin WHERE adminemail = ? AND password = ?");
    
    $stmt->bind_param("ss", $adminemail, $password);
    
    $stmt->execute();
    $result = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);

    if (count($result) > 0) {
        session_start();
        $_SESSION['adminemail'] = $adminemail;
        header("Location: adminloginsuccess.php");
        exit;
    } else {
        header("Location: adminlogin.php");
        exit;
    }
} catch (Exception $e) {
    echo "Error: " . $e->getMessage();
}
?>
