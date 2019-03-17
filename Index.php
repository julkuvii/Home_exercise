<?php
spl_autoload_register(function ($class_name) {
    include $class_name. ".php";
});

$student = new Student("Bilbo", "Baggins", 1890, array("Biology", "Adventuring", "Sindarin"), 111);
$teacher = new Teacher("Gandalf", "Grey", 1000, array("Wizarding", "Fireworks", "Adventuring"), "Magic");
$Staff = new Staff("Meriadoc", "Rankkibuk", 1982, "Cleaner");
$Staff2 = new Staff("Peregrin", "Tuk", 1990, "Caretaker");

echo "<h2>Students</h2>";
$student->printInfo();
echo "<br>";

echo "<h2>Teachers</h2>";
$teacher->printInfo();
echo "<br>";

echo "<h2>Staff</h2>";
$Staff->printInfo();
echo "<br>";
$Staff2->printInfo();
echo "<br>";
?>
