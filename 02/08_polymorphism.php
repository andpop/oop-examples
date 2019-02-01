<?php
namespace Popov\Lection2\Ex8;

abstract class Animal
{
    abstract public function speak();
}

class Cat extends Animal
{
    public function speak()
    {
        echo "Мяу!!!!".PHP_EOL;
    }
}

class Dog extends Animal
{
    public function speak()
    {
        echo "Гав-гав!!!!".PHP_EOL;
    }
}

class Duck extends Animal
{
    public function speak()
    {
        echo "Кря-кря!!!!".PHP_EOL;
    }
}

function speak(Animal $animal)
{
    $animal->speak();
}

$cat = new Cat;
$dog = new Dog;
$duck = new Duck;

speak($cat);
speak($dog);
speak($duck);