"use strict";

const form = document.querySelector('.form');
const table = document.querySelector('.table');

form.addEventListener( 'submit', formSubmit );


function debugOutput( text ) {
    const div = document.createElement('div');
    div.textContent = text;

    table.appendChild( div );
}

function formSubmit( e ) {
    e.preventDefault();


       

    let name = document.querySelector('.form__name').value;
    let lastName = document.querySelector('.form__lastname').value;

    const xhr = new XMLHttpRequest();
    const fd = new FormData( );

    fd.append( 'name', name );
    fd.append( 'last-name', lastName );

    xhr.addEventListener( 'load', xhrLoad );

    function xhrLoad() {
        while ( document.querySelectorAll('tr')[1] ) {
            document.querySelectorAll('tr')[1].remove();
        }


        let response = xhr.response;

        response = response.split('|tr|');
        response.pop();
        
        response.forEach( el => {
            el = el.split(",");
            const tr = document.createElement( 'tr' );
            tr.setAttribute( 'id', el[0]);
            const id = document.createElement( 'td' );
            const name = document.createElement( 'td' );
            const lastname = document.createElement( 'td' );

            id.textContent = el[0];
            name.textContent = el[1];
            lastname.textContent = el[2];

            table.appendChild( tr );

            tr.appendChild( id );
            tr.appendChild( name );
            tr.appendChild( lastname );
        });
    }

    xhr.addEventListener( 'error', xhrError );

    function xhrError() {

    }

    xhr.open( 'POST', './users.php' )

    xhr.send( fd );

    document.querySelector('.form__name').value = '';
    document.querySelector('.form__lastname').value = '';

}