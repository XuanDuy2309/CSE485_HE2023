<?php
include 'app/repositories/employeeRepository.php';
class EmployeeController{
    public function index(){
        $employeRepo = new employeeRepository();
        $employees = $employeRepo->getAllEmployees();
        include("app/views/employees.php");
    }

    public function detail(){
        $id=$_GET['id'];
        $employee = new Employee($id,'','','');
        $emRepo = new employeeRepository();
        $emDetail = $emRepo->getDetail($employee);
        include("app/views/detail.php");
    }
}