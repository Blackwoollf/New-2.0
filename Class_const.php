<?php

Class Building {
    const MAX_FLOOR = 20;
    private $floors;

    public function setFloorsNumber($floorsNumber)
    {
        if ($floorsNumber > self::MAX_FLOOR){
            echo "Первышено максимальное количество этажей" . PHP_EOL;
            return;
        }
        $this->floors = $floorsNumber;
    }
    public function showFloorsNumber()
    {
        echo $this->floors . PHP_EOL;
    }
}
$building = new Building();
$building->setFloorsNumber(21);
$building->setFloorsNumber(2);
$building->showFloorsNumber();