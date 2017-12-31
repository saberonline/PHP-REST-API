<?php
include '../../Controllers/SalarieController.php';
 
$data = file_get_contents('php://input');
$obj = json_decode($data);

$emp_no = $obj->emp_no;

if(!empty($data)) {
    
    $salarieController = new SalarieController();
    $salarieController->delete($obj, $emp_no);
    header('Location:list.php');
}