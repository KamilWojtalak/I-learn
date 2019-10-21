import React, { Component } from 'react';
// import Person from './Person/Person';
import UserInput from './UserInput/UserInput';
import UserOutput from './UserOutput/UserOutput';
import './App.css';
import './Person/Person.css';

// const randomNumber = 0;
class App extends Component {
  state = {
    name: 'Kamil'
  }

  changeName = (e) => {
    console.log('siema działam')
    this.setState({
      name: e.target.value  
    })
  }

    render() {
      return (
        <div className='siema'>
          <UserOutput value={this.state.name}/>
          <UserInput change={this.changeName} value={this.state.name}/>
          <UserInput change={this.changeName} value={this.state.name}/>
          <UserInput change={this.changeName} value={this.state.name}/>
          <UserOutput value={this.state.name}/>
        </div>
      );
    }
}
export default App

