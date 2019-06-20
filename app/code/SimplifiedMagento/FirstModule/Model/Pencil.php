<?php

namespace SimplifiedMagento\FirstModule\Model;

use SimplifiedMagento\FirstModule\Api\Size;
use SimplifiedMagento\FirstModule\Api\Color;
use SimplifiedMagento\FirstModule\Api\PencilInterface;

class Pencil implements PencilInterface
{
    protected $size;
    protected $color;

    /**
     * Pencil construct
     * 
     * @param Color $color color
     * @param Size  $size  size
     * 
     * @return void
     */
    public function __construct(Color $color, Size $size)
    {
        $this->size = $size;
        $this->color = $color;
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