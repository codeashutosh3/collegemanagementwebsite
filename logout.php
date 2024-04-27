<?php
session_start();
unset($_SESSION['authentication']);
unset($_SESSION['auth_user']);
// $_SESSION['message'] = 'Logged Out Successfully.';
$script = "<script>setTimeout(()=>{window.location.href='index.php'},0)</script>";
echo $script;
?>