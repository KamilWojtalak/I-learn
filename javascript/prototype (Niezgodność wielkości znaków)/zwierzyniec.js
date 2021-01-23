function Animal(name) {
    this.name = name;
    console.log(`${this.name} has beeen created`);
    this.animalCreated = function() {
        return `${this.name} has beeen created`;
    }
}

Animal.prototype.doSomething = function() {
    console.log(`${this.name} does something`);
}

function Type(name, type) {
    this.type = type;
    Animal.call(this, name);
    console.log('Type has been created');
    this.typeCreated = function() {
        return `${this.type} has been created`;
    }
}

Type.prototype = Object.create(Animal.prototype);
Type.prototype.doSOmethingDifferent = function() {
    console.log('Ciekawe?');
}

const dogy = new Type('Reksio', 'Pies');
console.log(dogy.animalCreated());
console.log(dogy.typeCreated());
dogy.doSomething();

