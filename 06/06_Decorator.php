<?php

interface Coffee
{
    public function getCost();
    public function getDescription();
}

//Базовый класс
class SimpleCoffee implements Coffee
{
    public function getCost()
    {
        return 10;
    }

    public function getDescription()
    {
        return 'Simple coffee';
    }
}

// =========== Декораторы =====================================================
// Декоратор
class MilkCoffee implements Coffee
{
    protected $coffee;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getCost()
    {
        return $this->coffee->getCost() + 2;
    }

    public function getDescription()
    {
        return $this->coffee->getDescription() . ', milk';
    }
}

// Декоратор
class WhipCoffee implements Coffee
{
    protected $coffee;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getCost()
    {
        return $this->coffee->getCost() + 5;
    }

    public function getDescription()
    {
        return $this->coffee->getDescription() . ', whip';
    }
}

// Декоратор
class VanillaCoffee implements Coffee
{
    protected $coffee;

    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getCost()
    {
        return $this->coffee->getCost() + 3;
    }

    public function getDescription()
    {
        return $this->coffee->getDescription() . ', vanilla';
    }
}


// Готовим кофе
$someCoffee = new SimpleCoffee();
echo $someCoffee->getCost() . PHP_EOL; // 10
echo $someCoffee->getDescription() . PHP_EOL; // Simple Coffee

$someCoffee = new MilkCoffee($someCoffee);
echo $someCoffee->getCost() . PHP_EOL; // 12
echo $someCoffee->getDescription() . PHP_EOL; // Simple Coffee, milk

$someCoffee = new WhipCoffee($someCoffee);
echo $someCoffee->getCost() . PHP_EOL; // 17
echo $someCoffee->getDescription() . PHP_EOL; // Simple Coffee, milk, whip

$someCoffee = new VanillaCoffee($someCoffee);
echo $someCoffee->getCost() . PHP_EOL; // 20
echo $someCoffee->getDescription() . PHP_EOL; // Simple Coffee, milk, whip, vanilla

echo "----------------------------------------------\n";

$someCoffee = new VanillaCoffee(new WhipCoffee(new MilkCoffee(new SimpleCoffee())));
echo $someCoffee->getCost() . PHP_EOL;
echo $someCoffee->getDescription() . PHP_EOL;
