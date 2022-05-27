<?php

$supportedOperators = ['+', '-', '*'];
 function calculateOperation (int $a, int $b, string $operator = '+') {
     if ($operator == '+') {
         return $a + $b;
     } elseif ($operator == '-') {
         return $a - $b;
     } elseif ($operator == '*') {
         return $a * $b;
     }
 }

 function parseOperator( $userInput, $operator) {
    $parseResult = explode($operator, $userInput);
    if ($parseResult && count($parseResult)== 2) {
        return ['operators' => $parseResult, 'operator' => $operator];
    }
    return false;
}

 do {
    $userInput = readline("Введите выражение ");//7+2
     foreach ($supportedOperators as $operator) {
        $parseResult = parseOperator($userInput, $operator);
         if($parseResult) {
             echo calculateOperation(intval($parseResult['operators'][0]), intval($parseResult['operators'][1]), $parseResult['operator']);
         }
     }
 } while (true);
