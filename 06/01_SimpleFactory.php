<?php

//Интерфейс двери
interface Door
{
    public function getWidth(): float;
    public function getHeight(): float;
}

//Реализация интерфейса двери
class WoodenDoor implements Door
{
    protected $width;
    protected $height;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function getWidth(): float
    {
        return $this->width;
    }

    public function getHeight(): float
    {
        return $this->height;
    }
}

//Фабрика дверей
class DoorFactory
{
    public function makeDoor($width, $height): Door
    {
        return new WoodenDoor($width, $height);
    }
}

//Использование фабрики
$factory = new DoorFactory();
$door = $factory->makeDoor(100, 200);

echo 'Width: ' . $door->getWidth() . PHP_EOL;
echo 'Height: ' . $door->getHeight() . PHP_EOL;
