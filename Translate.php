<?php

class Translate
{
    private $dictionary = [];

    public function addWord($RussianWord, $translite)
    {
        if (array_key_exists($translite, $this->dictionary)) {
            return;
        }
        $this->dictionary[$translite] = $RussianWord;
    }

    public function translate($englishWord)
    {
        if (array_key_exists($englishWord, $this->dictionary)) {
            return $this->dictionary[$englishWord] . PHP_EOL;
        }
        return false;
    }
}