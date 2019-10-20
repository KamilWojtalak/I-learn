import React, { Component } from 'react';
import Person from './Person/Person';
import './App.css';

// const randomNumber = 0;
class App extends Component {
  state = {
    persons: [
      { name: 'Kamil', age: '17' },
      { name: 'Kornelia', age: '23' },
      { name: 'Julia', age: '12' },
    ]
  }

  switchNameHandler = (newName) => {
    console.log('Siema działam');
    this.setState({
        persons: [
          { name: newName, age: '31' },
          { name: 'Kamila', age: '23' },
          { name: 'Julian', age: '15' },
        ]
      }
    )
  }

  nameChangeHandler = (e) => {
    this.setState({
      persons: [
        { name: 'newName', age: '31' },
        { name: e.target.value, age: '23' },
        { name: 'Julian', age: '15' },
      ]
    })
  }

  
    render() {
      return (
        <div className='siema'>
          <h1>Hi, do you can dance? And do you have free Fridays on 13 am.?</h1>
          <Person name={this.state.persons[0].name} age={this.state.persons[0].age}/>
          <button onClick={() => this.switchNameHandler('SIEMAAAA')}>Siema jestem Battonem</button>
          <Person name={this.state.persons[1].name}
           age={this.state.persons[1].age}
           click={this.switchNameHandler.bind(this, 'Siemanko')}
           changed={this.nameChangeHandler}>Siema Przykłądowy tekst</Person>
          <Person name={this.state.persons[2].name} age={this.state.persons[2].age}/>
        </div>
      );
    }
}
export default App

// state = {
  // persons: [
  //   { name: 'Kamil', age: '17' },
  //   { name: 'Kornelia', age: '23' },
  //   { name: 'Julia', age: '12' },
  // ]
// }

// switchNameHandler = () => {
//   console.log('Siema działam');
//   this.setState({
//     persons: [
//       { name: 'Kornel', age: '31' },
//       { name: 'Kamila', age: '23' },
//       { name: 'Julian', age: '15' },
//     ]
//   })
// }