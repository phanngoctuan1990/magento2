<?php

namespace SimplifiedMagento\FirstModule\NotMagento;

class RedPencil implements PencilInterface
{
    /**
     * Get pencil type
     * 
     * @return string
     */
    public function getPencilType() :string
    {
        return "Red pencil";
    }
}