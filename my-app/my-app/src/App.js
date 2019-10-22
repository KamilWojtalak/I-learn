import React, { Component } from 'react';
import Person from './Person/Person';

import './App.css';

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

  togglePersonsHandler = () => {
    const doesShow = this.state.showPersons;
    this.setState({showPersons: !(doesShow)})
  }

  render() {
    return (
      <div className='App'>
        <h1>Hi, there!</h1>
        <button onClick={this.togglePersonsHandler}>I am a Baton</button>
        {
        this.state.showPersons ?
          <div>  
            <Person />
            <Person />
            <Person />
          </div> : null
        }
      </div>
    )
  }
}

export default App;
