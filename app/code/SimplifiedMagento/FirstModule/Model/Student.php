<?php

namespace SimplifiedMagento\FirstModule\Model;

class Student
{
    protected $name;
    protected $age;

    public function __construct(string $name = "Tuan", int $age = 29)
    {
        $this->age = $age;
        $this->name = $name;
    }
}