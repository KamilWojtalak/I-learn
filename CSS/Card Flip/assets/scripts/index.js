const card = document.querySelector('.card');

card.addEventListener( 'click', toggleCardClass, false);

function toggleCardClass() {
    card.classList.toggle( 'is-flipped' );
}