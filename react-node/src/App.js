import React from 'react';
import { FaTwitter, FaFacebook } from 'react-icons/fa';
import { FaInstagram, FaYoutube, FaMediumM } from 'react-icons/fa';
import './App.css';
import Login from './login';
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
              <Login />
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