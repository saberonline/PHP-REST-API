<?php
include '../../Database/Connection.php';

class Employee extends Connection {

    private $emp_no;
    private $birth_date;
    private $first_name;
    private $last_name;
    private $gender;
    private $hire_date;

    function getEmp_no() {
        return $this->emp_no;
    }

    function setEmp_no($emp_no) {
        $this->emp_no = $emp_no;
    }

    function getBirth_date() {
        return $this->birth_date;
    }

    function setBirth_date($birth_date) {
        $this->birth_date = $birth_date;
    }

    function getFirst_name() {
        return $this->first_name;
    }

    function setFirst_name($first_name) {
        $this->first_name = $first_name;
    }

    function getLast_name() {
        return $this->last_name;
    }

    function setLast_name($last_name) {
        $this->last_name = $last_name;
    }

    function getGender() {
        return $this->gender;
    }

    function setGender($gender) {
        $this->gender = $gender;
    }

    function getHire_date() {
        return $this->hire_date;
    }

    function setHire_date($hire_date) {
        $this->hire_date = $hire_date;
    }

    public function insert($obj) {

        $sql = "INSERT INTO employees (
                    emp_no,
                    birth_date,
                    first_name,
                    last_name,
                    gender,
                    hire_date
                )
                VALUES (
                    :emp_no,
                    :birth_date,
                    :first_name,
                    :last_name,
                    :gender,
                    :hire_date
                )";
        
        $query = Connection::prepare($sql);

        $query->bindValue('emp_no',  $obj->emp_no);
        $query->bindValue('birth_date', $obj->birth_date);
        $query->bindValue('first_name' , $obj->first_name);
        $query->bindValue('last_name' , $obj->last_name);
        $query->bindValue('gender' , $obj->gender);
        $query->bindValue('hire_date' , $obj->gender);

    	return $query->execute();
	}

	public function update($obj, $emp_no = null) {

		$sql = "UPDATE employees 
                SET emp_no = :emp_no,
                    birth_date = :birth_date,
                    first_name = :first_name,
                    last_name = :last_name,
                    gender =:gender,
                    hire_date = :hire_date 
                WHERE emp_no = :emp_no ";
        
        $query = Connection::prepare($sql);
        
        $query->bindValue('emp_no', $obj->emp_no);
		$query->bindValue('birth_date', $obj->birth_date);
		$query->bindValue('first_name' , $obj->first_name);
		$query->bindValue('last_name', $obj->last_name);
		$query->bindValue('gender' , $obj->gender);
		$query->bindValue('hire_date' , $obj->hire_date);
		$query->bindValue('emp_no', $emp_no);
        
        return $query->execute();
	}

	public function delete($obj, $emp_no = null) {
        
        $sql = "DELETE FROM employees WHERE emp_no = :emp_no";
        
        $query = Connection::prepare($sql);
        
        $query->bindValue('emp_no', $emp_no);
		$query->execute();
	}

	public function findAll() {
        
        $sql = "SELECT * FROM employees";
        
        $query = Connection::prepare($sql);
		$query->execute();
        
        return $query->fetchAll();
	}
}