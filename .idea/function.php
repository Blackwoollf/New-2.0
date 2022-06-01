<?php

$textStorage = [
    0 => [
        'title' => 'Титул',
        'text' => 'Текст',
        ],
];

// Добавление элемента
function add(&$arr, $title, $text) {
    $arr[] = [
        'title' => $title,
        'text' => $text,
    ];
}

add($textStorage, "Букварь", "Заголовок");
add($textStorage, "Пропись", "Тема");


function remove(&$arr, $number) {
    if (isset($arr[$number])) {
        unset($arr[$number]);
        return 'true';
    } else {
        return 'false';
    }
}
//print_r(remove($textStorage, '0') . PHP_EOL);
//print_r(remove($textStorage, '5') . PHP_EOL);

function edit(&$arr1, $title, $text, &$arr, $number) {
    if (isset($arr[$number])) {
        $arr1 = [
            'title' => $title,
            'text' => $text,
        ];
        return array_replace($arr, $arr1);
        return true;
    }
}
edit($textStorage[1], 'dsa', 'asd',$textStorage, '1');

print_r($textStorage);



