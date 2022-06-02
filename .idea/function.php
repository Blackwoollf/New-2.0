<?php

$textStorage = [
    0 => [
        'title' => 'Титул',
        'text' => 'Текст',
        ],
];

// Добавление элемента
function add(&$textStorage, $title, $text) {
    $textStorage[] = [
        'title' => $title,
        'text' => $text,
    ];
}

add($textStorage, "Букварь", "Заголовок");
add($textStorage, "Пропись", "Тема");

//Удаление элемента
function remove(&$textStorage, $number) {
    if (isset($textStorage[$number])) {
        unset($textStorage[$number]);
        return 'true';
    } else {
        return 'false';
    }
}
print_r(remove($textStorage, '0') . PHP_EOL);
print_r(remove($textStorage, '5') . PHP_EOL);

//Изменен элемента
function edit(&$arrs, $title, $text, &$textStorage) {
    if (isset($textStorage)) {
        $arrs = [
            'title' => $title,
            'text' => $text,
        ];
        return array_replace($textStorage, $arrs);
    }
}
edit($textStorage[1], 'dsa', 'asd',$textStorage);

print_r($textStorage);



