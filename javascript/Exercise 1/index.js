"use strict";

const siema = function(declaration, yes, no) {
    if(+declaration)  {yes()}
    else {no()};
};

const yes = function() {
    console.log('Siema, niezłe zgadzanko, proste, że tak!');
    return true;
};

const no = function() {
    console.log('Oj byczku, nie, nie, nie BlooooodTrail');
    return true;
};


console.log(siema(1, yes, no));


const arrowFucntion = (arg1, arg2) => {

}

describe("pow", function() {

    it('raises to n-th power', function() {
        assert.equal(pow(2, 3), 8);
    })

})