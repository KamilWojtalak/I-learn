import React from 'react';
import 'Person.css';

const Person = (props) => {
    return (
    <div onClick={props.click} className='Person'>
        <p>Siema I am {props.name} and I am {props.age}.</p>
        <p>{props.children}</p>
        <input type="text" onChange={props.changed} value={props.name}/>
    </div>
    )
}

export default Person; 

