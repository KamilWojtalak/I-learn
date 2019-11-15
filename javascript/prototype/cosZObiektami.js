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

console.log(innyObiekt.c());