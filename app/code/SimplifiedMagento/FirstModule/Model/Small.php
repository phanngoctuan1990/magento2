<?php

namespace SimplifiedMagento\FirstModule\Model;

use SimplifiedMagento\FirstModule\Api\Size;

class Small implements Size
{
    /**
     * Get size
     * 
     * @return string
     */
    public function getSize() :string
    {
        return "small";
    }
}