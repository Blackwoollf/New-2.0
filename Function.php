<?php
$employee_1 = ['age' => 30, 'gender' => 'male', 'name' => 'Nick', 'surname' => 'Ivanov', 'position' => 'SEO'];
$employee_2 = ['age' => 33, 'gender' => 'female', 'name' => 'Ann', 'surname' => 'Petrova', 'position' => 'STO'];

function displayName($employee){
    echo $employee['name']. PHP_EOL;
}

function displayAge($employee){
    echo $employee['age']. PHP_EOL;
}

function changePosition(&$employee, $newPosition){
    $employee['position'] = $newPosition;
}

displayName($employee_1);
displayName($employee_2);

displayAge($employee_1);
displayAge($employee_2);

changePosition($employee_1, 'HR');

print_r($employee_1);