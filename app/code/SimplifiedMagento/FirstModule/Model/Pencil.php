<?php

namespace SimplifiedMagento\FirstModule\Model;

use SimplifiedMagento\FirstModule\Api\Size;
use SimplifiedMagento\FirstModule\Api\Color;
use SimplifiedMagento\FirstModule\Api\PencilInterface;

class Pencil implements PencilInterface
{
    protected $size;
    protected $name;
    protected $color;
    protected $school;

    /**
     * Pencil construct
     * 
     * @param Size   $size   size
     * @param Color  $color  color
     * @param String $name   name
     * @param String $school school
     * 
     * @return void
     */
    public function __construct(
        Size $size,
        Color $color,
        String $name = '',
        String $school = ''
    ) {
        $this->size = $size;
        $this->name = $name;
        $this->color = $color;
        $this->school = $school;
    }

    /**
     * Get pencil type
     * 
     * @return string
     */
    public function getPencilType() :string
    {
        return "Our pencil has " . $this->color->getColor() . " color and " . $this->size->getSize() . " size";
    }
}