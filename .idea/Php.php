<?php
//function search_file($folderName, $fileName){
//    // открываем текущую папку
//    $dir = opendir($folderName);
//    // перебираем папку
//    while (($file = readdir($dir)) !== false){ // перебираем пока есть файлы
//        if($file != "." && $file != ".."){ // если это не папка
//            if(is_file($folderName."/".$file)){ // если файл проверяем имя
//                // если имя файла нужное, то вернем путь до него
//                if($file == $fileName) return $folderName."/".$file;
//            }
//            // если папка, то рекурсивно вызываем search_file
//            if(is_dir($folderName."/".$file)) return search_file($folderName."/".$file, $fileName);
//        }
//    }
//    // закрываем папку
//    closedir($dir);
//}
//
//// пример использования
//$folderName = "./files"; // в какой папке ищем
//$fileName = "test.txt"; // что ищем
//$result = search_file($folderName, $fileName);
//if($result){
//    echo $result;
//}else{
//    echo "Нет такого файла";
//}

$fileName = "Readme.md"; // что ищем

$dir    = '/home/sova/PhpstormProjects/Strit 2.0';
$files1 = opendir($dir);// открываем текущую папку
while (false !== ($file = readdir($files1))) { // перебираем папку пока есть файлы $file - это 1 файл согласно пути
    if($file != "." && $file != "..") { // если это не папка
        if(is_file($dir."/".$file)) { // Если это файл, то проверяем имя
            if($file == $fileName) {
                echo $dir."/".$file;
            }
            if (is_dir($dir."/".$file)) {
                echo "Файл не найден";
            }
        }

    }
    //echo "$file \n";
}