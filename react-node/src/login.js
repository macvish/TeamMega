import React from 'react'
import { FaRegUser, FaLock } from 'react-icons/fa';

function Login() {
    return(
        <div>
        <form>
            <div className="login_back">
            <FaRegUser className="side_icons"/>
            <input 
                type="text" 
                className="input" 
                placeholder="Email Address or Username"
                required 
            /><br/>
            </div>
            <div className="login_back">
            <FaLock className="side_icons"/>  
            <input 
                type="password" 
                className="input" 
                placeholder="Password" 
                required
            />
            </div>
            <input type="submit" className="btn" value="Login"/>
        </form>
        <a href="./#">Forgot Password?</a>
        </div>
    );
}
export default Login;