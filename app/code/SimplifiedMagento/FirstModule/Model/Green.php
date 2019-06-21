<?php

namespace SimplifiedMagento\FirstModule\Model;

use SimplifiedMagento\FirstModule\Api\Color;
use SimplifiedMagento\FirstModule\Api\Brightness;

class Green implements Color
{
    protected $brightness;

    /**
     * Green construct
     * 
     * @param Brightness $brightness brightness
     * 
     * @return void
     */
    public function __construct(Brightness $brightness)
    {
        $this->brightness = $brightness;
    }

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