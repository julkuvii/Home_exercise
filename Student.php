<?php
class Student extends Person {
    private $selectedCourses;
    private $creditPoints;
    function __construct($firstName, $lastName, $yearOfBirth, $selectedCourses, $creditPoints) {
        parent::__construct($firstName, $lastName, $yearOfBirth);
        $this->selectedCourses = $selectedCourses;
        $this->creditPoints = $creditPoints;
    }

    public function getCourses() {
        $this->selectedCourses;
    }

    public function setCourses() {
        $this->selectedCourses = $selectedCourses;
    }

    public function getCredits() {
        $this->creditPoints;
    }

    public function setCredits() {
        $this->creditPoints = $creditPoints;
    }

    public function printInfo() {
        $courseArray = "";
        foreach ($this->selectedCourses as $selectedCourses) {
            $courseArray .= $selectedCourses. ", ";
        }

        parent::printInfo();
        echo "Selected Courses: ".$courseArray. "<br>";
        echo "Current Study Credits: ".$this->creditPoints. "<br>";
    }
}
?>
