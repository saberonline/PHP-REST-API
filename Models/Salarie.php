<?php
include '../../Database/Connection.php';

class Salarie extends Connection {

    private $emp_no;
    private $salary;
    private $from_date;
    private $to_date;

    function getEmp_no() {
        return $this->emp_no;
    }

    function setEmp_no($emp_no) {
        $this->emp_no = $emp_no;
    }

    function getSalary() {
        return $this->salary;
    }

    function setSalary($salary) {
        $this->salary = $salary;
    }

    function getFrom_date() {
        return $this->from_date;
    }

    function setFrom_date($from_date) {
        $this->from_date = $from_date;
    }

    function getTo_date() {
        return $this->to_date;
    }

    function setTo_date($to_date) {
        $this->to_date = $to_date;
    }

    public function insert($obj) {

        $sql = "INSERT INTO salaries (
                    emp_no,
                    salary,
                    from_date,
                    to_date
                )
                VALUES (
                    :emp_no,
                    :salary,
                    :from_date,
                    :to_date
                )";
        
        $query = Connection::prepare($sql);

        $query->bindValue('emp_no',  $obj->emp_no);
        $query->bindValue('salary', $obj->salary);
        $query->bindValue('from_date' , $obj->from_date);
        $query->bindValue('to_date' , $obj->to_date);

    	return $query->execute();
	}

	public function update($obj, $emp_no = null) {

		$sql = "UPDATE salaries 
                SET emp_no = :emp_no,
                    salary = :salary,
                    from_date = :from_date,
                    to_date = :to_date
                WHERE emp_no = :emp_no ";
        
        $query = Connection::prepare($sql);
        
        $query->bindValue('emp_no', $obj->emp_no);
		$query->bindValue('salary', $obj->salary);
		$query->bindValue('from_date', $obj->from_date);
		$query->bindValue('to_date' , $obj->to_date);
		$query->bindValue('emp_no', $emp_no);
        
        return $query->execute();
	}

	public function delete($obj, $emp_no = null) {
        
        $sql = "DELETE FROM salaries WHERE emp_no = :emp_no";
        
        $query = Connection::prepare($sql);
        
        $query->bindValue('emp_no', $emp_no);
		$query->execute();
	}

	public function findAll() {
        
        $sql = "SELECT * FROM salaries";
        
        $query = Connection::prepare($sql);
		$query->execute();
        
        return $query->fetchAll();
	}
}