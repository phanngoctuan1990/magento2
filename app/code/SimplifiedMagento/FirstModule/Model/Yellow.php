<?php

namespace SimplifiedMagento\FirstModule\Model;

use SimplifiedMagento\FirstModule\Api\Color;

class Yellow implements Color
{
    /**
     * Get color
     * 
     * @return string
     */
    public function getColor() :string
    {
        return "yellow";
    }
}