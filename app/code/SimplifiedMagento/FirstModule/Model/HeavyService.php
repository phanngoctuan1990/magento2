<?php

namespace SimplifiedMagento\FirstModule\Model;

class HeavyService
{
    /**
     * HeavyService construct
     * 
     * @return void
     */
    public function __construct()
    {
        echo "HeavyService has been instantiated" . "</br>";
    }

    /**
     * Print heavy service message
     * 
     * @return void
     */
    public function printHeavyServiceMessage()
    {
        echo "Message from HeavyService class";
    }
}