import React from 'react';


const Header = props => {
    return (
        <header className='header'>
            <h1 className='header__title'>Frontowy</h1>
            <menu className='header__menu'>
                <ul className='header__list'>
                    <li className='header__item'>O mnie</li>
                    <li className='header__item'>Blog</li>
                    <li className='header__item'>Kontakt</li>
                </ul>
            </menu>
        </header>
    )
}

export default Header;
