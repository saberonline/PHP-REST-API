<?php
include '../../Controllers/EmployeeController.php';

$employeeController = new EmployeeController();

header('Content-Type: application/json');

$json = array();

foreach ($employeeController->findAll() as $articleResult) {

  $article = array(
    'employee' => array(
      'emp_no'      => (string)$articleResult->emp_no,
      'birth_date'  => (string)$articleResult->birth_date,
      'first_name'  => (string)$articleResult->first_name,
      'last_name'   => (string)$articleResult->last_name,
      'gender'      => (string)$articleResult->gender,
      'hire_date'   => (string)$articleResult->hire_date
    )
  );
  $json[] = $article;
}
echo json_encode($json);