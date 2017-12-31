<?php
include '../../Controllers/SalarieController.php';

$salarieController = new SalarieController();

header('Content-Type: application/json');

$json = array();

foreach ($salarieController->findAll() as $articleResult) {

  $article = array(
    'salarie' => array(
      'emp_no'      => (string)$articleResult->emp_no,
      'salary'      => (string)$articleResult->salary,
      'from_date'   => (string)$articleResult->from_date,
      'to_date'     => (string)$articleResult->to_date
    ),
  );
  $json[] = $article;
}
echo json_encode($json);