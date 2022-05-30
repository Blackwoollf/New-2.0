<?php

$textStorage = [
    0 => [
        'title' => 'Титул',
    ],
    1 => [
        'text' => 'Текст',
    ],
];
//$arr = ['vfk' => 'cxv'];
//array_push($textStorage, $arr,);
//print_r($textStorage);

function add($arr, $title, $text) {
    echo $title, $text;
}

add($textStorage, $textStorage[0]['title'], $textStorage[1]['text']);
add($textStorage, $textStorage[0]['title'], $textStorage[1]['text']);


