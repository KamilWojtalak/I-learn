const boxes = document.querySelectorAll('.box');

boxes.forEach((item, index) => {
    item.style.backgroundColor = "rgb(" +  Math.floor( Math.random() * 256 ) + ", " +  Math.floor( Math.random() * 256 ) + ", " +  Math.floor( Math.random() * 256 ) + ")";
    item.addEventListener('click', () => {
        item.style.backgroundColor = "rgb(" +  Math.floor( Math.random() * 256 ) + ", " +  Math.floor( Math.random() * 256 ) + ", " +  Math.floor( Math.random() * 256 ) + ")";
    });
})

