<?php

namespace SimplifiedMagento\FirstModule\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Catalog\Api\ProductRepositoryInterface;
use SimplifiedMagento\FirstModule\Api\PencilInterface;
use SimplifiedMagento\FirstModule\Model\PencilFactory;

class HelloWorld extends Action
{
    protected $pencilFactory;
    protected $pencilInterface;
    protected $productRepository;

    /**
     * HelloWorld construct
     * 
     * @param Context                    $context           context
     * @param PencilFactory              $pencilFactory     pencilFactory
     * @param PencilInterface            $pencilInterface   pencilInterface
     * @param ProductRepositoryInterface $productRepository productRepository
     * 
     * @return void
     */
    public function __construct(
        Context $context,
        PencilFactory $pencilFactory,
        PencilInterface $pencilInterface,
        ProductRepositoryInterface $productRepository
    ) {
        parent::__construct($context);
        $this->pencilFactory = $pencilFactory;
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
        $student = $objectManager->create('SimplifiedMagento\FirstModule\Model\Student');
        var_dump($student);
        $pencil = $this->pencilFactory->create(['name' => 'Bob', 'school' => 'Bach khoa Da Nang']);
        var_dump($pencil);
    }
}