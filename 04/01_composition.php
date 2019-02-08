<?php

class Engine
{
    private $power;

    public function __construct($power)
    {
        $this->power = $power;
    }
}

class Car
{
    private $model;
    private $engine;

    public function __construct($model, $power)
    {
        $this->model = $model;
        $this->engine = new Engine($power);
    }
}

$myCar = new Car("Saturn VUE", 160);

var_dump($myCar);