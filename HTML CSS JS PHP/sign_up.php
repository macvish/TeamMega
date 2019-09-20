<?php
require "header.php";

$_msg = "";
$_msgStyle = "";

if(filter_has_var(INPUT_POST, 'signup-submit')){
   
    $fullname = $_POST['signup-fullname'];
    $username = $_POST['signup-username'];
    $phone = $_POST['signup-phone'];
    $email = $_POST['signup-email'];
    $password = $_POST['signup-password'];
    $repassword = $_POST['repeat-password'];

    $check_username = preg_match("/^[a-zA-Z0-9]*$/", $username);
    $check_email = filter_var($email, FILTER_VALIDATE_EMAIL);

    try {

        // Get Submited data from the from.
        
        $formData = array(
        
        'fullname' => $fullname,
        
        'username' => $username,

        'phone-no' => $phone,

        'email' => $email,
        
        'password' => $password
        
        );
        
        $jsonData = file_get_contents($jsonFile);
        
        $arrayData = json_decode($jsonData, true);

    if(empty($fullname) || empty($username) || empty($phone) || empty($email) || empty($password) || empty($repassword)){
        $_msg = "Please fill fields as appropriate";
        $_msgClass = "red";
    }elseif(!$check_username && !$check_email){
        $_msg = "Username / Email Address Needed";
    }elseif(!$check_username){
        $_msg = "Username / Email Address Needed";
    }elseif($password !== $repassword){
        $_msg = "Password Mismatch";
    }
   else{
    array_push($arrayData, $formData);
    $jsonData = json_encode($arrayData, JSON_PRETTY_PRINT);
    
    if (file_put_contents($jsonFile, $jsonData)) {
    
    echo 'Welcome ', $_POST['signup-name'];
    
    } else {
    echo "error";
    }
    }
}
catch (Exception $e) {

    echo 'Exception Caught : ', $e->getMessage(), "\n";
    
    }
}
?>