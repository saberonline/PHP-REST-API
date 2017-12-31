<?php
include '../../Models/Salarie.php';

class SalarieController {

	function insert($obj) {

		$salarie = new Salarie();
		
		return $salarie->insert($obj);
		header('Location:list.php');
	}

	function update($obj, $emp_no) {

		$salarie = new Salarie();
		return $salarie->update($obj, $emp_no);
	}

	function delete($obj, $emp_no) {

		$salarie = new Salarie();
		return $salarie->delete($obj, $emp_no);
	}

	function findAll() {

		$salarie = new Salarie();
		return $salarie->findAll();
	}
}