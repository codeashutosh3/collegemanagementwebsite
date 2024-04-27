<?php
include "connection.php";

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$role = $_POST['select']; // Changed from 'select' to 'role'

$query = "INSERT INTO signup (name, email, password, role) VALUES ('$name', '$email', '$password', '$role')";
$result = mysqli_query($conn, $query);

if ($result) {
    echo 1;
} else {
    echo 0;
}
?>
