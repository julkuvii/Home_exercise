<?php
class Teacher extends Person {
    private $teachingSubjects;
    private $department;
    function __construct($firstName, $lastName, $yearOfBirth, $teachingSubjects, $department) {
        parent::__construct($firstName, $lastName, $yearOfBirth);
        $this->teachingSubjects = $teachingSubjects;
        $this->department = $department;
    }

    public function getSubjects() {
        $this->teachingSubjects;
    }

    public function setSubjects() {
        $this->teachingSubjects = $teachingSubjects;
    }

    public function getDepartment() {
        $this->deparment;
    }

    public function setDepartment() {
        $this->department = $department;
    }

    public function printInfo() {
        $subjectArray = "";
        foreach ($this->teachingSubjects as $teachingSubjects) {
            $subjectArray .= $teachingSubjects. ", ";
        }

        parent::printInfo();
        echo "Subjects: ".$subjectArray. "<br>";
        echo "Department: ".$this->department. "<br>";
    }
}
?>
