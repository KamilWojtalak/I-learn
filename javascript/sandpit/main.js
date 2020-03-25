const one = {
    name: 'Kamil',
    lastname: 'Wojtalak',
    animal: 'dog',
};

const two = {};

for (let key in one) {
    two[key] = one[key]; 
}
two.name = "Siemaszko";
console.log(`${one.name} ${two.name}`);

const three = {};

Object.assign( three, two);
console.log(`${three.name}`);