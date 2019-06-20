<?php

namespace SimplifiedMagento\FirstModule\Model;

use SimplifiedMagento\FirstModule\Api\Color;

class Green implements Color
{
    /**
     * Get color
     * 
     * @return string
     */
    public function getColor() :string
    {
        return "green";
    }
}