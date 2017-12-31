<?php
include '../../Controllers/SalarieController.php';
 
$data = file_get_contents('php://input');
$obj = json_decode($data);

if(!empty($data)) {	

    $salarieController = new SalarieController();
    $salarieController->insert($obj);
    header('Location:list.php');
}