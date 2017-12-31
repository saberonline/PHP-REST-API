<?php
include '../../Controllers/EmployeeController.php';
 
$data = file_get_contents('php://input');
$obj = json_decode($data);

$emp_no = $obj->emp_no;

if(!empty($data)) {
    
    $employeeController = new EmployeeController();
    $employeeController->update($obj , $emp_no);
    header('Location:list.php');
}