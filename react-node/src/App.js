import React from 'react';
import Row1 from './Components/row-1';
import Row2 from './Components/row-2'
import Signup from './Components/signup'
import './App.css';

function App() {
  return (
    <div className="container">
      <Row1 />
      <Row2 />
      <Signup />
    </div>
  );
}

export default App;