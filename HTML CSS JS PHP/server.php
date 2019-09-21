<?php
session_start();

$_msgStyle = "";

$db = mysqli_connect('localhost', 'id10948804_workit', 'teamMega123$', 'id10948804_meagworkit');

if (isset($_POST['submit'])) {
  $_msg = "";
$errors = array();

    $userid = mysqli_real_escape_string($db, $_POST['userid']);

    $userpwd = mysqli_real_escape_string($db, $_POST['password']);

            if(empty($userid) || empty($userpwd)){

                    $_msg = "Please Fill In All Fields";

                    array_push($errors, "Please Fill In All Fields");
            }

            if (count($errors) == 0) {
    $password = md5($userpwd);
    $query = "SELECT * FROM user WHERE username = '$userid' AND password= '$password'";
    $results = mysqli_query($db, $query);

    if (mysqli_num_rows($results) == 1) {
      $_SESSION['username'] = $userid;
      $_SESSION['success'] = "You are now logged in";
      header('location: home.php');
    }else {
        array_push($errors, "Wrong username/password combination");
        $_msg = "Wrong username/password combination";
    }
  }

        }


if (isset($_POST['signup-submit'])) {
  msg = "";
  $error = array();

    $fullname = mysqli_real_escape_string($db, $_POST['signup-fullname']);

    $username = mysqli_real_escape_string($db, $_POST['signup-username']);

    $phone = mysqli_real_escape_string($db, $_POST['signup-phone']);

    $email = mysqli_real_escape_string($db, $_POST['signup-email']);

    $password = mysqli_real_escape_string($db, $_POST['signup-password']);
    $repassword = mysqli_real_escape_string($db, $_POST['repeat-password']);


    $check_username = preg_match("/^[a-zA-Z0-9]*$/", $username);

    $check_email = filter_var($email, FILTER_VALIDATE_EMAIL);

    if(empty($fullname) || empty($username) || empty($phone) || empty($email) || empty($password) || empty($repassword)){

        $msg = "Please fill fields as appropriate";
        array_push($error, "Please fill fields as appropriate");

        $_msgClass = "red";

    }if(!$check_username && !$check_email){

        $msg = "Username / Email Address Needed";

    }if(!$check_username){

        $msg = "Username / Email Address Needed";
        array_push($error, "Username / Email Address Needed");

    }if($password !== $repassword){

        $msg = "Password Mismatch";
        array_push($error, "Password Mismatch");
    }
    
   $user_check_query = "SELECT * FROM user WHERE username = '$username' OR email = '$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      $msg = "Username already exists";
      array_push($error, "Username already exists");
    }

    if ($user['email'] === $email) {
      $msg = "email already exists";
      array_push($error, "email already exists");
    }
  }

if (count($error) == 0) {
  	$password_1 = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO user (fullname, username, phone_no, email, password) 
  			  VALUES('$fullname', '$username', '$phone', '$email', '$password_1')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: home.php');
  }
}
?>