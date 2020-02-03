let siema = function(declaration, yes, no) {
    if(+declaration)  yes()
    else no();
};

let yes = function() {
    console.log('Siema, niezłe zgadzanko, proste, że tak!');
};

let no = function() {
    console.log('Oj byczku, nie, nie, nie BlooooodTrail');
};


console.log(siema('0', yes, no));