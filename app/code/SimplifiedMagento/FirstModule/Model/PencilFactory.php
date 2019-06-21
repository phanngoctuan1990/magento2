<?php

namespace SimplifiedMagento\FirstModule\Model;

use Magento\Framework\ObjectManagerInterface;

class PencilFactory
{
    protected $objectManager;

    public function __construct(ObjectManagerInterface $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    public function create(array $data)
    {
        return $this->objectManager->create('SimplifiedMagento\FirstModule\Api\PencilInterface', $data);
    }
}