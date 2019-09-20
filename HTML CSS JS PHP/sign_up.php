<?php
require "header.php";

$_msg = "";
$_msgStyle = "";

if(filter_has_var(INPUT_POST, 'signup-submit')){
   
   
    $username = htmlspecialchars($_POST['signup-username']);
    $email = htmlspecialchars($_POST['signup-email']);
    $password = htmlspecialchars($_POST['signup-password']);
    $repassword = htmlspecialchars($_POST['repeat-password']);

    $check_username = preg_match("/^[a-zA-Z0-9]*$/", $username);
    $check_email = filter_var($email, FILTER_VALIDATE_EMAIL);

    if(empty($username) || empty($email) || empty($password) || empty($repassword)){
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
    $_msg = "Sign Up Successful";
   }
} else{
    $_msg = "Fields Cannot be empty";
}
?>
<body>
        <div class="container">
            <div class="col-1">
            <div class="header">
                <div>
                <img src="./logo.svg" class="App-logo" alt="logo" /><br/>
                <span>Workit</span>
                </div>
            </div>
            <div class="main">
                <div>
                <div class="login">
                    <div>
<?php if($_msg != ""): ?><p><?php echo $_msg; ?></p><?php endif;?>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                        <div class="signUp">
                        <i class="fa fa-user side_icons"></i>
                        <input 
                            type="text" 
                            class="input" name="signup-username"
                            placeholder="Username"
                            value="<?php echo isset($_POST['signup-username']) ? $username : '';?>"
                        /><br/>
                        </div>
                        <div class="signUp">
                            <i class="fa fa-envelope side_icons"></i>  
                            <input 
                                type="text" 
                                class="input" name="signup-email"
                                placeholder="Email Address" 
                                value="<?php echo isset($_POST['signup-email']) ? $email : '';?>"
                            />
                            </div>
                        <div class="signUp">
                            <i class="fa fa-lock side_icons"></i>  
                            <input 
                                type="password" 
                                class="input" name="signup-password"
                                placeholder="Password" 
                                
                            />
                            </div>
                            <div class="signUp">
                            <i class="fa fa-lock side_icons"></i>  
                            <input 
                                type="password" 
                                class="input" name="repeat-password"
                                placeholder="Repeat Password" 
                               
                            />
                            </div>
                        
                        <button type="submit" class="btn" name="signup-submit">Submit</button>
                    </form>
                    <a href="index.php">Login</a>
                    </div>
                </div>
                
                </div>
            </div>
<?php
require "footer.php";
?>