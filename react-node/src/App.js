import React from 'react';
import { FaTwitter, FaFacebook, FaRegUser, FaLock } from 'react-icons/fa';
import { FaInstagram, FaYoutube, FaMediumM } from 'react-icons/fa';
import './App.css';
import logo from './logo.svg';

function App() {
  return (
    <div className="container">
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
            </div>
            <div className="signup">
            <div>
              <span>Don't have an Account?</span>
              <button className="btn_signup">Sign up</button>
              </div>
            </div>
          </div>
        </div>
        <div className="footer">
          <div>
            <span><u>FOLLOW US</u></span><br/>
            <div className="icons">
              <FaTwitter className="fa-icons" /> 
              <FaFacebook className="fa-icons" /> 
              <FaInstagram className="fa-icons" /> 
              <FaYoutube className="fa-icons" /> 
              <FaMediumM className="fa-icons" />
            </div>
          </div>
        </div>
      </div>
      <div className="col-2">
        <div>
          <span>We are the Future of Work</span><br/>
          <p>Join us today</p>
        </div>
      </div>
    </div>
  );
}

export default App;