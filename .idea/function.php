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

//Удаление элемента
function remove(&$arr, $number) {
    if (isset($arr[$number])) {
        unset($arr[$number]);
        return 'true';
    } else {
        return 'false';
    }
}
print_r(remove($textStorage, '0') . PHP_EOL);
print_r(remove($textStorage, '5') . PHP_EOL);

//Изменен элемента
function edit(&$arrs, $title, $text, &$arr) {
    if (isset($arr)) {
        $arrs = [
            'title' => $title,
            'text' => $text,
        ];
        return array_replace($arr, $arrs);
    }
}
edit($textStorage[1], 'dsa', 'asd',$textStorage);

print_r($textStorage);



