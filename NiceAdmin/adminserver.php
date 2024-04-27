<?php
 session_start();
 include "../connection.php";
if (isset ($_POST['login-btn'])) {
  // echo "<script>alert('working')</script>";
  if (empty ($_POST['email'])) {
      echo "<script>alert('Does not found email!')</script>";
  } else {
      $email = test_input($_POST['email']);
  }

  if (empty ($_POST['password'])) {
      echo "<script>alert('Does not found pass!')</script>";
  } else {
      $pass = test_input($_POST['password']);
  }
}
if (!empty ($email) || !empty ($pass)) {
  $query = "SELECT * FROM admin  WHERE email='$email' and password='$pass' LIMIT 1";
  $sql = mysqli_query($conn, $query);
  $result = mysqli_num_rows($sql);
  // echo $result;
  if ($result > 0) {
      $row = mysqli_fetch_array($sql);
      //    print_r($row);
      // Authenticating Logged In User
      $_SESSION['authent'] = true;

      // storing Authentication User data in Session
      $_SESSION['auth_user'] = [
          'user_id' => $row['id'],
          'email' => $row['email'],
          'password' => $row['password'],
      ];

      // echo $_SESSION['auth_user']['username'] . "<br/>";
      // echo $_SESSION['auth_user']['user_id'] . "<br/>";
      // echo $_SESSION['auth_user']['email'] . "<br/>";
      // echo $_SESSION['auth_user']['password'] . "<br/>";

      $_SESSION['message'] = "You are Logged In Successfully";
      $script = "<script>setTimeout(()=>{window.location.href='home.php'},0)</script>";
      echo "<script>alert($_SESSION[message])</script>",$script;

  }
} else {
  $script = "<script>setTimeout(()=>{window.location.href='pages-login.php'},0)</script>";
  echo "<script>alert('All feilds is required!')</script>", $script;
}
function test_input($data)
{
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>