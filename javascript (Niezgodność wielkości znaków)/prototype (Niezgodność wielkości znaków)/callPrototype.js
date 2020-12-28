function Parent(firstName) {
    this.firstName = firstName;
}
Parent.prototype.getFirstName = function() {
    return `My first name is ${this.firstName}`;
}
function Child(firstName, lastName) {
    this.lastName = lastName;
    Parent.call(this, firstName);
}
// Child.prototype = new Parent(); ===
Child.prototype = Object.create(Parent.prototype);
Child.prototype.getLastName = function() {
    return `My last name is ${this.lastName}`;
}
const siema = new Child('Kamil', 'Wojtalak');
console.log(siema.firstName);
console.log(siema.lastName);
console.log(siema.getFirstName());
console.log(siema.getLastName());