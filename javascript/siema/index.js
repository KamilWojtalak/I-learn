function Employee(name, dept) {
    this.name = name || '';
    this.dept = dept || 'general';
  }
Employee.prototype.specialty = 'none';

function Manager() {
    Employee.call(this);
    this.reports = [];
  }
  Manager.prototype = Object.create(Employee.prototype);
  Manager.prototype.constructor = Manager;
  
  function WorkerBee(projs) {
    this.projects = projs || [];
  }
  WorkerBee.prototype = new Employee;
  WorkerBee.prototype.constructor = WorkerBee;

  function SalesPerson() {
    WorkerBee.call(this);
    this.dept = 'sales';
    this.quota = 100;
 }
 SalesPerson.prototype = Object.create(WorkerBee.prototype);
 SalesPerson.prototype.constructor = SalesPerson;
 
 function Engineer(projs, name, mach) {
    this.base = WorkerBee;
    this.base(name, 'engineering', projs);
    this.machine = mach || '';
  }
  Engineer.prototype = new WorkerBee;
 Engineer.prototype.constructor = Engineer;

 var jane = new Engineer('Doe, Jane', ['navigator', 'javascript'], 'belau');

 console.log(jane);