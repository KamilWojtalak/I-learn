function Employee(name, dept) {
    this.name = name || '';
    this.dept = dept || 'general';
}

function Manager(reps) {
    Employee.call(this, name, dept);
    this.reports = reps || [];
}

Manager.prototype = new Employee;
Manager.prototype.constructor = Manager;

function WorkerBee(name, dept, proj) {
    Employee.call(this, name, dept);
    this.project = proj || [];
}

WorkerBee.prototype = new Employee;
WorkerBee.prototype.constructor = WorkerBee;

function SalesPerson() {
    WorkerBee.call(this);
    this.dept = 'sales';
    this.quota = 100;
}

SalesPerson.prototype = new WorkerBee();
SalesPerson.prototype.constructor = SalesPerson;


function Engineer(name, mach) {
    WorkerBee.call(this, name );
    this.dept = 'engineering';
    this.machine = mach || '';
}

Engineer.prototype = new WorkerBee;
Engineer.prototype.constructor = Engineer;

const siema = new Engineer('Kamil', 'AMAUHFIUB');
console.log(siema);