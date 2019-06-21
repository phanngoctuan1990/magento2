<?php

namespace SimplifiedMagento\FirstModule\NotMagento;

class BigPencil implements PencilInterface
{
    /**
     * Get pencil type
     * 
     * @return string
     */
    public function getPencilType() :string
    {
        return "Big pencil";
    }
}