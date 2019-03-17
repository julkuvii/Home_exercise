<?php
class Staff extends Person {
    private $vacancy;
    function __construct($firstName, $lastName, $yearOfBirth, $vacancy) {
        parent::__construct($firstName, $lastName, $yearOfBirth);
        $this->vacancy = $vacancy;
    }

    public function getVacancy() {
        $this->vacancy;
    }

    public function setVacancy() {
        $this->vacancy = $vacancy;
    }

    public function printInfo() {
        parent::printInfo();
        echo "Vacancy: ".$this->vacancy. "<br>";
    }
}
?>
