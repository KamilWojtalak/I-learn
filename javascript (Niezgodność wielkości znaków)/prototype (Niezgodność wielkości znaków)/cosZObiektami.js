const Obiekt = {
    a: 1,
    b: 2,
    c() {
        return (this.a + this.b) * 3.5;
    }
}

const innyObiekt = Object.create(Obiekt);
innyObiekt.a = 13;
innyObiekt.b = 12;

// console.log(innyObiekt.c());



function CosZTablicami() {
    this.tablica1 = [];
    this.tablica2 = [];
}

CosZTablicami.prototype = {
    dodajCosDoTablicy1: function(...cos) {
        this.tablica1.push(...cos);
        console.log(this.tablica1);
    }
}

const cosZTablicami = new CosZTablicami();
cosZTablicami.dodajCosDoTablicy1('arg1', 'arg2', 'arg3');
console.log(CosZTablicami.tablica1);