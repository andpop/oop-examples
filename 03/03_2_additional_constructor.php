<?php

namespace Popov\Lection3\Ex3_2;


class User
{
    const ADMIN_ROLE = 1;
    const AUDITOR_ROLE = 2;
    const OPERATOR_ROLE = 3;

    static public function createAdmin($name)
    {
        return new self($name, self::ADMIN_ROLE);
    }

    static public function createAuditor($name)
    {
        return new self($name, self::AUDITOR_ROLE);
    }

    static public function createOperator($name)
    {
        return new self($name, self::OPERATOR_ROLE);
    }

    private $name;

    private function __construct($name, $userType)
    {
        $this->name = $name;

        switch ($userType) {
            case self::ADMIN_ROLE:
                echo "Создаем администратора ($name)" . PHP_EOL;
                break;
            case self::AUDITOR_ROLE:
                echo "Создаем аудитора ($name)".PHP_EOL;
                break;
            case self::OPERATOR_ROLE:
                echo "Создаем оператора ($name)".PHP_EOL;
                break;
        }
    }
}


$admin = User::createAdmin('Ivanov-AS');
$auditor = User::createAuditor('Petrov-AF');
$operator = User::createOperator('Sidorov-IG');