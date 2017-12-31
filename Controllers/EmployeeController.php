<?php
include '../../Models/Employee.php';

class EmployeeController {

	function insert($obj) {

		$employee = new Employee();
		
		return $employee->insert($obj);
		header('Location:list.php');
	}

	function update($obj, $emp_no) {

		$employee = new Employee();
		return $employee->update($obj, $emp_no);
	}

	function delete($obj, $emp_no) {

		$employee = new Employee();
		return $employee->delete($obj, $emp_no);
	}

	function findAll() {

		$employee = new Employee();
		return $employee->findAll();
	}
}