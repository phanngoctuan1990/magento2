<?php

namespace SimplifiedMagento\FirstModule\Model;

class Student
{
    protected $age;
    protected $name;
    protected $scores;

    /**
     * Student construct
     * 
     * @param int    $age    age
     * @param string $name   name
     * @param array  $scores scores
     * 
     * @return void
     */
    public function __construct(
        int $age = 29,
        string $name = "Tuan",
        array $scores = ['maths' => 80, 'programming' => 90]
    ) {
        $this->age = $age;
        $this->name = $name;
        $this->scores = $scores;
    }
}