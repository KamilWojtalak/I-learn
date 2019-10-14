import React, { Component } from 'react';
import Person from './Person/Person';
import CSS from './App.css';
class App extends Component {
  state = {
    persons: [
      { name: 'Kamil', age: '17' },
      { name: 'Kornelia', age: '23' },
      { name: 'Julia', age: '12' },
    ]
  }

  render() {
    return (
      <div className='siema'>
        <h1>Hi, do you can dance? And do you have free Fridays on 13 am.?</h1>
        <Person name={this.state.persons[0].name} age={this.state.persons[0].age}/>
        <Person name={this.state.persons[1].name} age={this.state.persons[1].age}>Siema Przykłądowy tekst</Person>
        <Person name={this.state.persons[2].name} age={this.state.persons[2].age}/>
      </div>
    );
  }
}
export default App