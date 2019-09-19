import React from 'react'
import { FaRegUser, 
    FaLock,
    FaPhone, 
    FaAt } from 'react-icons/fa'


function Signup() {
    return(
        <div id="signupForm" className="signup-form-popeffect">
            <div className="popup">                       
                <div className="letter-w3ls">
                    <form>
                        <div className="signup_back">
                            <FaRegUser className="side_icons"/>
                            <input 
                            type="text" 
                            className="signup-input" 
                            name="name" 
                            placeholder="Full Name" 
                            required
                            />
                        </div>
                        <div className="signup_back">
                            <FaRegUser className="side_icons"/>
                            <input 
                            type="text" 
                            className="signup-input" 
                            name="name" 
                            placeholder="Username" 
                            required />
                        </div>
                        <div className="signup_back">
                            <FaPhone className="side_icons"/>
                            <input 
                            type="text" 
                            className="signup-input" 
                            name="name" 
                            placeholder="Phone" 
                            required />
                        </div>
                        <div className="signup_back">
                            <FaAt className="side_icons"/>
                            <input 
                            type="email" 
                            className="signup-input" 
                            name="email" 
                            placeholder="Email" 
                            required />
                        </div>
                        <div className="signup_back">
                            <FaLock className="side_icons"/>
                            <input 
                            type="password" 
                            className="signup-input" 
                            name="password" 
                            placeholder="Password" 
                            required />
                        </div>
                        <div className="signup_back">
                            <FaLock className="side_icons"/>
                            <input 
                            type="password" 
                            className="signup-input" 
                            name="password" 
                            placeholder="Confirm Password" 
                            required />
                        </div><br/>
                        <div>
                            <input 
                            type="submit" 
                            className="btn_signup" 
                            value="Sign Up" />
                        </div>
                    </form>
                    <div className="clear"></div>
                </div>
            <a className="close" href="./#">&times;</a>
        </div>
    </div>
    )
}
export default Signup