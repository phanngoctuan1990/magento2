<?php

namespace SimplifiedMagento\FirstModule\Model;

use SimplifiedMagento\FirstModule\Api\Color;

class Red implements Color
{
    /**
     * Get color
     * 
     * @return string
     */
    public function getColor() : string
    {
        return "red";
    }
}