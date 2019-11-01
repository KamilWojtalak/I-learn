import React, { Component } from 'react';
import Person from './Person/Person';
import Header from './Header/Header'


import './App.css';
import './Header/Header.css';
class App extends Component {
  state = {
    persons: [
      {
        name: 'Kamil',
        age: '17'
      },
      {
        name: 'Szymon',
        age: '18'
      }
    ],
    showPersons: false
  }


  render() {

    return (
      <div className='App'>
        <Header />
        <button onClick={this.togglePersonsHandler}>I am a Baton</button>
        <Person />

      </div>
    )
  }
}

export default App;
