import React from 'react';
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
            <form>
              <input type="text" className="input" placeholder="Email Address or Username" /><br/>
              <input type="password" className="input" placeholder="Password" />
              <input type="submit" className="btn" value="Login"/>
            </form>
            <p>or login with</p>
            <p>Forgot Password?</p>
            <div className="signup">
              <p>Don't have an Account?</p>
              <button className="btn_signup">Sign up</button>
            </div>
          </div>
        </div>
        <div className="footer">
          <span>FOLLOW US</span>
        </div>
      </div>
      <div className="col-2">
        <h1>We are the Future of Work</h1>
        <h3>Join us today</h3>
      </div>
    </div>
  );
}

export default App;