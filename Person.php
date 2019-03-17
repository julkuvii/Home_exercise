<?php
abstract class Person {
    private $firstName;
    private $lastName;
    private $yearOfBirth;
    function __construct($firstName, $lastName, $yearOfBirth) {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->yearOfBirth = $yearOfBirth;
    }

    public function getFirstName() {
        $this->firstName;
    }

    public function setFirstName() {
        $this->firstName = $firstName;
    }

    public function getLastName() {
        $this->lastName;
    }

    public function setLastName() {
        $this->lastName = $lastName;
    }

    public function getYearOfBirth() {
        $this->yearOfBirth;
    }

    public function setYearOfBirth() {
        $this->yearOfBirth = $yearOfBirth;
    }

    public function getAge() {
        $age = 2019 - $this->yearOfBirth;
        return $age;
    }

    public function printInfo() {
        echo "Firstname: ".$this->firstName. "<br>";
        echo "Lastname: ".$this->lastName. "<br>";
        echo "Birth Year: ".$this->yearOfBirth. "<br>";
        echo "Age: ".$this->getAge(). "<br>";
    }
}
?>
