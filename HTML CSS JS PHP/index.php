<?php 
require 'header.php';
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