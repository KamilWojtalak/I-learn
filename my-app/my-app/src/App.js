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

  deletePersonHandler = (personIndex) => {
    const persons = this.state.persons;
    persons.splice(personIndex, 1);
    this.setState({persons: persons})
  }

  render() {
    
    let persons = null;

    if (this.state.showPersons) {
      persons = <div>
        { this.state.persons.map((person, index) => {
          return <Person name={person.name} age={person.age} click={() => this.deletePersonHandler(index)}/>
        }) }
      </div>
    }

    return (
      <div className='App'>
        <h1>Hi, there!</h1>
        <button onClick={this.togglePersonsHandler}>I am a Baton</button>

        { persons }
      </div>
    )
  }
}

export default App;
