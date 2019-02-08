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

    public function __construct($model, $engine)
    {
        $this->model = $model;
        $this->engine = $engine;
    }
}

$myCar = new Car("Saturn VUE", new Engine(160));

var_dump($myCar);