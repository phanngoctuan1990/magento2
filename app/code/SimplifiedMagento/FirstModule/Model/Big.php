<?php

namespace SimplifiedMagento\FirstModule\Model;

use SimplifiedMagento\FirstModule\Api\Size;

class Big implements Size
{
    /**
     * Get size
     * 
     * @return string
     */
    public function getSize() :string
    {
        return "big";
    }
}