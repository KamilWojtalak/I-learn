import React from 'react';

const Person = props => {
    return (
        <div onClick={props.click} className='person'>
            <p>Lorem Lorem Lorem Lorem Lorem {props.name}</p>
            <p>Lorem Lorem Lorem Lorem Lorem {props.age}</p>
        </div>
    )
}

export default Person;