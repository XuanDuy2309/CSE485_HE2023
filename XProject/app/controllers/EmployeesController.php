<?php
include 'app/repositories/employeesRepository.php';
class EmployeesController{
    public function index(){
        $employeRepo = new employeesRepository();
        $employees = $employeRepo->getAllEmployees();
        include("app/views/employees.php");
    }

    public function detail(){
        $id=$_GET['id'];
        $employees = new employees($id,'','','');
        $emRepo = new employeesRepository();
        $emDetail = $emRepo->getDetail($employees);
        include("app/views/detail.php");
    }
}