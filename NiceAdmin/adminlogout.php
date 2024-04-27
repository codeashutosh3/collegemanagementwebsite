<?php
session_start();
unset($_SESSION['authent']);
unset($_SESSION['auth_user']);
// $_SESSION['message'] = 'Logged Out Successfully.';
$script = "<script>setTimeout(()=>{window.location.href='pages-login.php'},0)</script>";
echo $script;
?>