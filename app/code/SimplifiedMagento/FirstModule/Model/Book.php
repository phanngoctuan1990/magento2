<?php

namespace SimplifiedMagento\FirstModule\Model;

use SimplifiedMagento\FirstModule\Api\Size;
use SimplifiedMagento\FirstModule\Api\Color;

class Book
{
    protected $size;
    protected $color;

    /**
     * Book construct
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
     * Get book type
     * 
     * @return string
     */
    public function getBookType() :string
    {
        return "Our book has " . $this->color->getColor() . " color and " . $this->size->getSize() . " size";
    }
}