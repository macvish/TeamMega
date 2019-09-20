import React from "react";
import Login from './login';
import Follow from './follow';
import logo from '../logo.svg';

function Row1() {
    return(
        <div className="col-1">
            <div className="header">
                <div>
                    <img src={logo} className="App-logo" alt="logo" /><br/>
                    <span>Workit</span>
                </div>
            </div>
            <div className="main">
                <div>
                    <div className="login">
                        <Login />
                    </div>
                    <div className="signup">
                        <div>
                            <span>Don't have an Account?</span>
                            <a href="#signupForm">
                                <button className="btn_signup" type="submit">Sign up</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div className="footer">
                <Follow />
            </div>
        </div>
    )
}
export default Row1;