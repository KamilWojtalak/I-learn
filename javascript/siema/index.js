function Employee() {
    this.name = '';
    this.dept = 'general';
}

function Manager() {
    Employee.call(this);
    this.reports = [];
}

Manager.prototype = Object.create(Employee.prototype);
Manager.prototype.constructor = Manager;

function WorkBee() {
    Employee.call(this);
    this.projects = [];
}

WorkBee.prototype = Object.create(Employee.prototype);
// WorkBee.prototype.constructor = WorkBee;

const kamil = new WorkBee;

console.log(kamil.name);
console.log(kamil.dept);
console.log(kamil.reports);
console.log(kamil.projects);
console.log(kamil);