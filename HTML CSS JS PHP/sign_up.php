<?php

require "header.php";


$_msg = "";
$errors = array();

$_msgStyle = "";

$db = mysqli_connect('localhost', 'id10948804_workit', 'teamMega123$', 'id10948804_meagworkit');


if (isset($_POST['signup-submit'])) {

    $fullname = mysqli_real_escape_string($db, $_POST['signup-fullname']);

    $username = mysqli_real_escape_string($db, $_POST['signup-username']);

    $phone = mysqli_real_escape_string($db, $_POST['signup-phone']);

    $email = mysqli_real_escape_string($db, $_POST['signup-email']);

    $password = mysqli_real_escape_string($db, $_POST['signup-password']);
    $repassword = mysqli_real_escape_string($db, $_POST['repeat-password']);


    $check_username = preg_match("/^[a-zA-Z0-9]*$/", $username);

    $check_email = filter_var($email, FILTER_VALIDATE_EMAIL);

    if(empty($fullname) || empty($username) || empty($phone) || empty($email) || empty($password) || empty($repassword)){

        $_msg = "Please fill fields as appropriate";
        array_push($errors, "Please fill fields as appropriate");

        $_msgClass = "red";

    }if(!$check_username && !$check_email){

        $_msg = "Username / Email Address Needed";

    }if(!$check_username){

        $_msg = "Username / Email Address Needed";
        array_push($errors, "Username / Email Address Needed");

    }if($password !== $repassword){

        $_msg = "Password Mismatch";
        array_push($errors, "Password Mismatch");
    }
    
   $user_check_query = "SELECT * FROM User WHERE username = '$username' OR email = '$email' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

  if ($user) { // if user exists
    if ($user['username'] === $username) {
      $_msg = "Username already exists";
      array_push($errors, "Username already exists");
    }

    if ($user['email'] === $email) {
      $_msg = "email already exists";
      array_push($errors, "email already exists");
    }
  }

if (count($errors) == 0) {
  	$password_1 = md5($password);//encrypt the password before saving in the database

  	$query = "INSERT INTO User (fullname, username, phone_no, email, password) 
  			  VALUES('$fullname', '$username', '$phone', '$email', '$password_1')";
  	mysqli_query($db, $query);
  	$_SESSION['username'] = $username;
  	$_SESSION['success'] = "You are now logged in";
  	header('location: ./home.php');
  }
}

?>