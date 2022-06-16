<?php

class Translator
{
    private $dictionary = [];

    public function addWord(string $russianWord, string $translite)
    {
        if (array_key_exists($translite, $this->dictionary)) {
            return;
        }
        $this->dictionary[$translite] = $russianWord;
    }

    public function translate($englishWord)
    {
        if (array_key_exists($englishWord, $this->dictionary)) {
            return $this->dictionary[$englishWord] . PHP_EOL;
        }
        return false;
    }
}

$translation = new Translator();
$translation->addWord('Лес', 'forest');
$translation->addWord('Работа', 'work');


$translationResult = $translation->translate('work');
if ($translationResult !== false) {
    echo $translationResult . PHP_EOL;
} else {
    echo 'Данного слова нет в словаре!';
}
