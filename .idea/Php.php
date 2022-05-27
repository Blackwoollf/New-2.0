<?php
//
//    function calculationSum( $a, $b ) {
//        return $a + $b;
//    }
//echo "Сумма = " . calculationSum(5, 2);

//function funch($b){
//    return count($b);
//}
//$b = [1,2,3,4,5,];
//echo funch($b);

//$list1 = [1, 2, 3,];
//$list2 = [4, 5, 6,];
//$list = [
//    's1' => $list1,
//    's2' => $list2,
//    's3' => [
//        's4' => ['Moscow'],
//    ],
//];
//var_dump($list['s3']['s4']);

//function isValueNamber($n) {
//    return $n % 3 === 0;
//}
//
//function displayResult($n, $isValueNamber) {
//    if ($isValueNamber) {
//        echo $n . " = Это число делится на 3" . PHP_EOL;
//    }
//}
//
//for ($i = 1; $i < 10; $i++) {
//    echo displayResult($i, isValueNamber($i));
//}

        //6.4
//function displayString(string $str, int $b):void {
//    for ($i = 0; $i < $b; $i++) {
//        echo $str . PHP_EOL;
//    }
//}
//displayString("Test", 3);

function displayString(string $str, int $b) {
    $resulArray = [];
    for ($i = 0; $i < $b; $i++) {
        $resulArray[$i] = $str;
    }
    return $resulArray;
}
$resulArray = displayString("Test", 3);

foreach ($resulArray as $result) {
    echo $result . PHP_EOL;
}
