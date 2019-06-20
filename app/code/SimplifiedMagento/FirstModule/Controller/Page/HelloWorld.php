<?php

namespace SimplifiedMagento\FirstModule\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Catalog\Api\ProductRepositoryInterface;
use SimplifiedMagento\FirstModule\Api\PencilInterface;

class HelloWorld extends Action
{
    protected $pencilInterface;
    protected $productRepository;

    /**
     * HelloWorld construct
     * 
     * @param Context                    $context           context
     * @param PencilInterface            $pencilInterface   pencilInterface
     * @param ProductRepositoryInterface $productRepository productRepository
     * 
     * @return void
     */
    public function __construct(
        Context $context,
        PencilInterface $pencilInterface,
        ProductRepositoryInterface $productRepository
    ) {
        parent::__construct($context);
        $this->pencilInterface = $pencilInterface;
        $this->productRepository = $productRepository;
    }
    
    /**
     * HelloWorld view action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     * 
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function execute()
    {
        // echo get_class($this->productRepository);
        echo $this->pencilInterface->getPencilType();
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $pencil = $objectManager->create('SimplifiedMagento\FirstModule\Model\Pencil');
        var_dump($pencil);
        $book = $objectManager->create('SimplifiedMagento\FirstModule\Model\Book');
        echo $book->getBookType();
        var_dump($book);
    }
}