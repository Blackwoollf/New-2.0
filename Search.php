<?php

function search_file($searchRoot, $fileName, &$searchResult)
{
    //$searchResult = array();
    $searchRoot = rtrim($searchRoot, '/');
    // открываем текущую папку
    $dir = opendir($searchRoot); // открываем текущую папку

    // перебираем папку, пока есть файлы
    while (($file = readdir($dir)) !== false) {
        $file_path = "$searchRoot/$file";
        // если это не папка
        if ($file == '.' || $file == '..') continue;

        // если это файл, то проверяем имя
        if (is_file($file_path)) {
            // если имя файла искомое, то вернем путь до него и запишем в массив
            if (filesize($file_path) > 0) {
                if (false !== strpos($file, $fileName)) $searchResult[] = $file_path . " Размер файл: " . filesize($file_path) . " мб ";
            }
        } // если это папка, то рекурсивно вызываем search_file
        elseif (is_dir($file_path)) {
            $res = search_file($file_path, $fileName, $searchResult);
            // $searchResult = array_merge( $searchResult, $res );
        }

    }

    closedir($dir); // закрываем папку

    return $searchResult;
}

$searchRoot = '/home/web/PhpstormProjects/Strit/test_search'; // в какой папке ищем
$searchName = '123.txt';   // что ищем
$searchResult = array();

$searchResult = search_file($searchRoot, $searchName, $searchResult);

if ($searchResult) {
    print_r($searchResult);
} else {
    print_r('Такого файла нет!');
}