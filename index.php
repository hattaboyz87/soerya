<?php
include "company_class.php";
include "departement_class.php";
include "employee_class.php";

if($_POST){
    $company = new Company();
    $departement = new Departement();
    $employee = new Employee();
    
    $company->setCompanyName($_POST['company_name']);
    
    $departement->setDepartemenName($_POST['departement_name']);
    
    $employee->setEmployeeName($_POST['employee_name']);
    $employee->setEmployeeTitle($_POST['employee_title']);
    $employee->setEmployeeSalary($_POST['employee_salary']);
    
    
    echo "Company Name : ". $company->getCompanyName().'<br>';
    echo "Departement Name : ". $departement->getDepartemenName().'<br>';
    echo "Employee Name : ". $employee->getEmployeeName().'<br>';
    echo "Employee Title : ". $employee->getEmployeeTitle().'<br>';
    echo "Employee Salaey : ". $employee->getEmployeeSalary().'<br>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" placeholder="Company Name" name="company_name">
        <input type="text" placeholder="Departemen Name" name="departement_name">
        <input type="text" placeholder="Employee Name" name="employee_name">
        <input type="text" placeholder="Employee Title" name="employee_title">
        <input type="number" placeholder="Employee Salary" name="employee_salary">
        <button type="submit"> Save </button>
    </form>
</body>
</html>