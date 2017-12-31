<?php
include '../../Controllers/EmployeeController.php';
 
$data = file_get_contents('php://input');
$obj = json_decode($data);

if(!empty($data)) {	

    $employeeController = new EmployeeController();
    $employeeController->insert($obj);
    header('Location:list.php');
}