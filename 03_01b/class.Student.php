<?php

require_once('class.Person.php');

class Student extends Person {
  private $gpa;
  private $major; 
  private $address;

  public function _construct ($name, $dob, $adress, $major = 'Undecided') {
    parent::_construcy ( $name, $dob ); 
    $this->address = $address; 
    $this->major = $major;
    $this->gpa = null; 
  }

 public function get_address() {
		return $this->address;
	}

	public function get_major() {
		return $this->major;
	}

	public function get_gpa() {
		return $this->gpa;
	}
	
	public function set_address( $address ) {
		$this->address = $address;
	}

	public function set_major( $major ) {
		$this->set_major = $major;
	}

	public function set_gpa( $gpa ) {
		$this->gpa = $gpa;
	}

  public function calculate_gpa ($grade, $credits) {
    $this-> set_gpa ( $grades / $credits )
    return $this-> gpa;
  }
}