<?php
require "header.php";
$_msg = "";
$_msgStyle = "";

if(filter_has_var(INPUT_POST, 'submit')){
    $userid = $_POST['signup-email'];
    $userpwd = $_POST['signup-password'];
    
    $json = file_get_contents("./data.json"); // get content of json
    $jsonArray = json_decode($json, true); // convert json to array

        try {
        
        foreach ($jsonArray as $key => $user) {
            if(!empty($userid) && !empty($userpwd)){
                if(filter_var($userid, FILTER_VALIDATE_EMAIL === false)){
                $msg="Please provide a valid email";
                }
                else{
                    $_msg = "Please Fill In All Fields";
                    $_msgClass = "red";
                }
            }
            else if ($userid != $user['signup-email'] || $userpwd != $user['signup-password']) {
                $_msg = "Email or password do not match";                
            } else {
                echo "Welcome ";
                echo $user['signup-fullname'];
            }
        }
    }
    catch(Exception $e) {
        echo 'Exception Caught : ', $e->getMessage(), "\n";
    }
}
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
                    <?php if($_msg !=""):?><div><?php echo $_msg;?></div><?php endif;?>
                    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
                        <div class="login_back">
                        <i class="fa fa-user side_icons"></i>
                        <input 
                            type="text" 
                            class="input" name="usermail"
                            placeholder="Email Address or Username"
                            value="<?php echo isset($_POST['usermail'])? $userid: '';?>"
                        /><br/>
                        </div>
                        <div class="login_back">
                            <i class="fa fa-lock side_icons"></i>  
                            <input 
                                type="password" 
                                class="input" name="password"
                                placeholder="Password" 
                    
                            />
                            </div>
                        
                        <button type="submit" name="submit" class="btn">Login</button>
                    </form>
                    <a href="./#">Forgot Password?</a>
                    </div>
                </div>
                <div class="signup">
                <div>
                    <span>Don't have an Account?</span>
                    <a href="sign_up.php" class="btn_signup">Sign up</a>
                    </div>
                </div>
                </div>
            </div>

<?php
require "footer.php";
?>