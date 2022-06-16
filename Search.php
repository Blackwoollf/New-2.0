<?php

function search_file($searchRoot, $fileName, &$searchResult)
{
    $searchRoot = rtrim($searchRoot, '/');
    // открываем текущую папку
    $dir = opendir($searchRoot); // открываем текущую папку

    // перебираем папку, пока есть файлы
    while ($file = readdir($dir)) {
        $file_path = "$searchRoot/$file";
        // если это не папка
        if ($file == '.' || $file == '..') {
            continue;
        }

        // если это файл, то проверяем имя
        if (is_file($file_path)) {
            // если имя файла искомое, то вернем путь до него и запишем в массив
            if (false !== strpos($file, $fileName)) {
                $searchResult[] = $file_path;//. " Размер файл: " . filesize($file_path) . " мб ";
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

function find($searchResult)
{
    foreach ($searchResult as $asd) {
        if (filesize($asd) > 0) {
            print_r($asd . " Размер файл: " . filesize($asd) . " мб ");
        }
    }
}

if ($searchResult) {
    print_r(find($searchResult));
} else {
    print_r('Такого файла нет!');
}