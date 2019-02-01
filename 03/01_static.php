<?php

namespace Popov\Lection3\Ex1;


class StaticExample
{
    static public $name = "Ваня";

    static public function say()
    {
        echo "Привет, " . self::$name . "!" . PHP_EOL;
    }

}


StaticExample::say();

