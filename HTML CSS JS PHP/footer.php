<div class="footer">
                <div>
                <span><u>FOLLOW US</u></span><br/>
                <div class="icons">
                    <i class="fa fa-twitter fa-icons"></i>
                    <i class="fa fa-facebook-square fa-icons"></i>
                    <i class="fa fa-instagram fa-icons"></i>
                    <i class="fa fa-youtube-play fa-icons"></i>
                    <i class="fa fa-medium fa-icons"></i>
                </div>
                </div>
            </div>
            </div>
            <div class="col-2">
            <div>
                <span>We are the Future of Work</span><br/>
                <p>Join us today</p>
            </div>
        </div>
        <!--signup form-->
        <div id="signupForm" class="signup-form-popeffect">
                <div class="popup">                       
                <?php if($_msg != ""): ?><p><?php echo $_msg; ?></p><?php endif;?>
                   <div class="letter-w3ls">
                      <form action="./sign_up.php" method="POST">
                        <div class="signup_back">
                            <i class="fa fa-user side_icons"></i>
                            <input 
                            type="text" 
                            class="signup-input" 
                            name="signup-fullname" 
                            placeholder="Full Name" 
                            >
                        </div>  
                         <div class="signup_back">
                        <i class="fa fa-user side_icons"></i>
                            <input 
                            type="text" 
                            class="signup-input" 
                            name="signup-username" 
                            placeholder="Username" 
                            >
                         </div>
                         <div class="signup_back">
                        <i class="fa fa-phone side_icons"></i>
                            <input 
                            type="text" 
                            class="signup-input" 
                            name="signup-phone" 
                            placeholder="Phone" 
                            >
                         </div>
                         
                         <div class="signup_back">
                        <i class="fa fa-at side_icons"></i>
                            <input 
                            type="email" 
                            class="signup-input" 
                            name="signup-email" 
                            placeholder="Email" 
                            >
                         </div>
                         <div class="signup_back">
                        <i class="fa fa-lock side_icons"></i>
                            <input 
                            type="password" 
                            class="signup-input" 
                            name="signup-password" 
                            placeholder="Password"
                            >
                         </div>
                         <div class="signup_back">
                        <i class="fa fa-lock side_icons"></i>
                            <input 
                            type="password" 
                            class="signup-input" 
                            name="repeat-password" 
                            placeholder="Confirm Password" 
                            >
                         </div><br>
                         <div>
                            <input type="submit" class="btn_signup" name="signup-submit" value="Sign Up">
                         </div>
                      </form>
                      <div class="clear"></div>
                   </div>
                   <!--//login form-->
                   <a class="close" href="#">&times;</a>
                </div>
             </div>
           <!-- //popup -->
    </div>
    
</body>
</html>