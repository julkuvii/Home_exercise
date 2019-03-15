<?php

spl_autoload_register(function ($class_name){
  include $class_name . '.php';
});

echo '<h2>Student</h2>';

$student = new Student();
$student->setFname('Viivi');
$student->setLname('Julkunen');
$student->setBirth('1998');
$student->setCourses('PHP');
$student->setCourses('JavaScript');
$student->setCredit('45');

$coursesofStudent=$student->getCourses();

echo "<br>The firstname is ".$student->getFname();
echo "<br>The lastname is ".$student->getLname();
echo "<br>The year of birth is ".$student->getBirth();
echo "<br>Credits: ".$student->getCredit();
echo "<br>Courses: ";
print_r($coursesofStudent);

echo "<h2>Staff</h2>";

$staff = new Staff('Riku', 'Nieminen','1986', 'Cleaner');
$staff2 = new Staff('Krista', 'Kosonen','1983', 'Caretaker');

echo "<br>The firstname is ".$staff->getFname();
echo "<br>The lastname is ".$staff->getLname();
echo "<br>The year of birth is ".$staff->getBirth();
echo "<br>Vacancy: ".$staff->getVacancy();

echo "<br>The firstname is ".$staff2->getFname();
echo "<br>The lastname is ".$staff2->getLname();
echo "<br>The year of birth is ".$staff2->getBirth();
echo "<br>Vacancy: ".$staff2->getVacancy();

echo "<h2>Teachers</h2>";

$teachers = new Teacher();
$teachers->setFname('Pekka');
$teachers->setLname('Alaluukas');
$teachers->setBirth('Who knows');
$teachers->setDepartment('Tech I guess');
$teachers->setSubject('PHP');
$teachers->setSubject('Databases');

$subjectsofTeacher=$teachers->getSubject();

echo "<br>The firstname is ".$teachers->getFname();
echo "<br>The lastname is ".$teachers->getLname();
echo "<br>The year of birth is ".$teachers->getBirth();
echo "<br>Department: ".$teachers->getDepartment();
echo "<br>Subjects: ";
print_r($subjectsofTeacher);
 ?>
