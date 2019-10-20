import React from 'react';

const UserOutput = props => {
    return (
        <div className='Person'>
            <p>Siema</p>
            <p>Siema jestem {props.value}</p>
        </div>
    )
}

export default UserOutput