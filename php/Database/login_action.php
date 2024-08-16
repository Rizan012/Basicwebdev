<?php
session_start();
include 'db.php';

$name = $_POST['name'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE name = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $name);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    if (password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['name'];
        header('Location: welcome.php');
    } else {
        echo "Invalid password.";
    }
} else {
    echo "No user found with that name.";
}

$stmt->close();
$conn->close();
?>
