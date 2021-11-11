<?php 
class Employee {
    // Properties
    public $name;
    public $title;
    public $salary;

    // Methods
    function setEmployeeName($name) {
        $this->name = $name;
    }
    function getEmployeeName() {
        return $this->name;
    }

    function setEmployeeTitle($title) {
        $this->title = $title;
    }
    function getEmployeeTitle() {
        return $this->title;
    }

    function setEmployeeSalary($salary) {
        $this->salary = $salary;
    }
    function getEmployeeSalary() {
        return $this->salary;
    }
}
  
?>