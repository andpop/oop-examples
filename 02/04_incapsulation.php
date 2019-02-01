<?php
namespace Popov\Lection2\Ex4;

class Student
{
    private $name;
    private $lastName;

    function __construct($name, $lastName)
    {
        $this->name = $name;
        $this->lastName = $lastName;
    }

    function getName()
    {
        return $this->name;
    }

    function setName($name)
    {
        $this->name = $name;
    }

    function getLastName()
    {
        return $this->lastName;
    }

    function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    function getFullName()
    {
        echo "Полное имя: ".$this->name." ".$this->lastName.PHP_EOL;
    }
}


$student1 = new Student("Сергей", "Иванов");

echo $student1->getName().PHP_EOL;
$student1->getFullName();
$student1->setName("Николай");
$student1->getFullName();


//echo $student1->name;
// PHP Fatal error:  Uncaught Error: Cannot access private property