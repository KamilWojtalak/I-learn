const add = document.querySelector('.add');
const remove = document.querySelector('.remove');
const container = document.querySelector('.container');


add.addEventListener( 'click', () => {
    const div = document.createElement('div');

    div.style.backgroundColor = "rgb(" + Math.floor( Math.random() * 256 ) + ", " + Math.floor( Math.random() * 256 )+ ", " + Math.floor( Math.random() * 256 ) + ")";  

    container.appendChild(div);
});

remove.addEventListener( 'click', () => {
    const divs = document.querySelectorAll('.container div');


    container.removeChild(divs[divs.length - 1]);
});