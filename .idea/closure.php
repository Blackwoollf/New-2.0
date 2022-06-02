<?php

$password = 'password';

$checkPassword = function ($userPassword) use ($password) {
    return $userPassword === $password;
};

do {
    $userPassword = readline('Введите пароль: ');
    if ($checkPassword($userPassword)) {
        echo 'Пароль верен';
        break;
    } else {
        echo 'Пароль неверен' . PHP_EOL;
    }
} while(true);
