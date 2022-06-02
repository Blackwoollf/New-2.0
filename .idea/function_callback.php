<?php
//вызвать функцию callback  по именни, сущ метод - call_user_funck

//function cbOne () {
//    return "My name is tbOne";
//}
//
//function cbTwo () {
//    return "My name is tbTwo";
//}
//
//function runCallBack ($fName) {
//    echo call_user_func($fName) . PHP_EOL;
//}
//
//runCallBack('cbOne');
//runCallBack('cbTwo');

//$numbers = [1, 2, 3, 4, 5];
//
//function factorial($n) {
//    return $n > 1 ? $n * factorial($n-1) : $n;
//}
//
//$factorials = array_map('factorial', $numbers);
//
//echo "Результат " . PHP_EOL;
//print_r($factorials);


$numbers = [1, 2, 3, 4, 5];

$newNumbers = array_map('sqrt', $numbers);

echo "Результат " . PHP_EOL;
print_r($newNumbers);