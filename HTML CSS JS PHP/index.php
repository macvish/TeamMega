<?php 
require 'header.php';

$_msg = "";
$errors = array();
$_msgStyle = "";

$db = mysqli_connect('localhost', 'id10948804_workit', 'teamMega123$', 'id10948804_meagworkit');

    if (isset($_POST['submit'])) {

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

                            class="input" name="userid"

                            placeholder="Email Address or Username"
                            required="" 
                        /><br/>

                        </div>

                        <div class="login_back">

                            <i class="fa fa-lock side_icons"></i>  

                            <input 

                                type="password" 

                                class="input" name="password"

                                placeholder="Password"
                                required=""  
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

                    <a href="#signupForm"><button class="btn_signup">Sign up</button></a>

                    </div>

                </div>

                </div>

            </div>



<?php

require "footer.php";

?>