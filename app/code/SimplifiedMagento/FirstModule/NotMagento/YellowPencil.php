<?php

namespace SimplifiedMagento\FirstModule\NotMagento;

class YellowPencil implements PencilInterface
{
    /**
     * Get pencil type
     * 
     * @return string
     */
    public function getPencilType() :string
    {
        return "Yellow pencil";
    }
}