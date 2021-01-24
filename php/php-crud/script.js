const form = document.querySelector('.form');
const button = document.querySelector('.button');
const table = document.querySelector('.table');
const modify = document.querySelector('.modify');

function initSelect() {
    const xhr = new XMLHttpRequest();
    xhr.open( 'POST', './src/Select.php' );

    xhr.addEventListener( 'load', () => {
        const response = JSON.parse( xhr.response );
        
        // display table conent in table
        response.forEach( item => {
            createTR( item );
        })
    });

    xhr.send();

    clearInputs();
}

initSelect();

form.addEventListener( 'submit', handleForm );

function handleForm( e ) {
    e.preventDefault();

    const fd = new FormData( document.querySelector('.form') );
    const xhr = new XMLHttpRequest();

    xhr.addEventListener( 'load', () => {
        const response = JSON.parse( xhr.response );

        // clear table
        clearTable();
        
        // display table conent in table
        response.forEach( item => {
            createTR( item );
        })
    });

    xhr.addEventListener( 'error', ( e ) => {
        console.log( e );
    });

    xhr.open( 'POST', './src/Insert.php' );

    xhr.send( fd );

    clearInputs();
}

function clearInputs() {
    document.querySelector('.form__name').value = '';
    document.querySelector('.form__lastname').value = '';
}

function clearTable() {
    while ( document.querySelectorAll('tr')[1] ) {
        document.querySelectorAll('tr')[1].remove();
    }
}

function createTR( json ) {
    const tr = document.createElement( 'tr' );
    tr.setAttribute( 'id', 'id' + json.id );

    const id = document.createElement( 'td' );
    const name = document.createElement( 'td' );
    const lastname = document.createElement( 'td' );
    const time = document.createElement( 'td' );
    const deleteBtn = document.createElement( 'td' );
    const modifyBtn = document.createElement( 'td' );

    id.textContent = json.id;
    name.textContent = json.name;
    lastname.textContent = json.lastname;
    time.textContent = json.time;
    deleteBtn.textContent = 'x';
    modifyBtn.textContent = 'modify';

    deleteBtn.addEventListener( 'click', deleteUser );
    modifyBtn.addEventListener( 'click', modifyUser );


    table.appendChild( tr );
    tr.appendChild( id );
    tr.appendChild( name );
    tr.appendChild( lastname );
    tr.appendChild( time );
    tr.appendChild( deleteBtn );
    tr.appendChild( modifyBtn );
}

button.addEventListener( 'click', function() {
    const xhr = new XMLHttpRequest();

    xhr.addEventListener( 'load', () => {
        const response = xhr.response;
        document.querySelector('.create-db').textContent = 'Database created succesfully.';

        clearTable();
    });

    xhr.addEventListener( 'error', ( e ) => {
        console.log( e );
    });

    xhr.open( 'POST', './src/InitDB.php' );

    xhr.send(  );
})


function deleteUser(e) {
    const id = e.target.parentNode.id.replace( 'id', '');

    const xhr = new XMLHttpRequest();

    xhr.addEventListener( 'load', () => {
        console.log(xhr.response);
        const response = JSON.parse(xhr.response);
        
        clearTable();

        response.forEach( item => {
            createTR( item );
        })
    });

    xhr.addEventListener( 'error', ( e ) => {
        console.log( e );
    });

    let data = '?id=' + id;

    xhr.open( 'GET', './src/Delete.php' + data );

    xhr.send(  );
}

function modifyUser (e) {
    while ( modify.firstChild ) {
        modify.firstChild.remove();
    }

    const tr = e.target.parentNode;
    const id = tr.id;

    const tableData = document.querySelectorAll('#' + id + ' td');
    const name = tableData[1].textContent;
    const lastname = tableData[2].textContent;

    const form = document.createElement('form');

    form.addEventListener( 'submit', modifyForm );
    // modify name input
    const div1 = document.createElement('div');
    const label1 = document.createElement('label');
    label1.textContent = 'Modify name: ';
    label1.setAttribute('for', 'modify-name');
    const input1 = document.createElement('input');
    input1.setAttribute('type', 'text');
    input1.setAttribute('name', 'modify-name');
    input1.setAttribute('id', 'modify-name');
    input1.setAttribute('value', name);

    // modify lastname input
    const div2 = document.createElement('div');
    const label2 = document.createElement('label');
    label2.setAttribute('for', 'modify-lastname');
    label2.textContent = 'Modify lastname: ';
    const input2 = document.createElement('input');
    input2.setAttribute('type', 'text');
    input2.setAttribute('name', 'modify-lastname');
    input2.setAttribute('id', 'modify-lastname');
    input2.setAttribute('value', lastname);

    // hidden id input
    const input3 = document.createElement('input');
    input3.setAttribute('type', 'hidden');
    input3.setAttribute('name', 'modify-id');
    input3.setAttribute('value', id);

    // modify submit
    const div3 = document.createElement('div');
    const submit = document.createElement('input');
    submit.type = 'submit';
    submit.value = 'Modify';

    // create a new form with this user data
    modify.appendChild( form );
    form.appendChild( div1 );
    form.appendChild( div2 );
    form.appendChild( input3 );
    form.appendChild( div3 );

    div1.appendChild( label1 );
    div1.appendChild( input1 );

    div2.appendChild( label2 );
    div2.appendChild( input2 );

    div3.appendChild( submit );
}

function modifyForm(e) {
    e.preventDefault();

    while ( modify.firstChild ) {
        modify.firstChild.remove();
    }
    const xhr = new XMLHttpRequest();
    const fd = new FormData( e.target );
    
    xhr.addEventListener( 'load', () => {
        const response = JSON.parse(xhr.response);

        clearTable();
        response.forEach( item => {
            createTR( item );
        })
    });
    
    xhr.addEventListener( 'error', ( e ) => {
        console.log( e );
    });

    xhr.open( "POST", './src/Modify.php' );

    xhr.send( fd );
}