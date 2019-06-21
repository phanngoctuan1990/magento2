<?php

namespace SimplifiedMagento\FirstModule\Controller\Page;

use Magento\Framework\App\Request\Http;
use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Catalog\Model\ProductFactory;
use Magento\Framework\Event\ManagerInterface;
use Magento\Catalog\Api\ProductRepositoryInterface;
use SimplifiedMagento\FirstModule\Model\HeavyService;
use SimplifiedMagento\FirstModule\Api\PencilInterface;
use SimplifiedMagento\FirstModule\Model\PencilFactory;

class HelloWorld extends Action
{
    protected $http;
    protected $heavyService;
    protected $pencilFactory;
    protected $_eventManager;
    protected $productFactory;
    protected $pencilInterface;
    protected $productRepository;

    /**
     * HelloWorld construct
     * 
     * @param Http                       $http              http
     * @param Context                    $context           context
     * @param HeavyService               $heavyService      heavyService
     * @param PencilFactory              $pencilFactory     pencilFactory
     * @param ProductFactory             $productFactory    productFactory
     * @param ManagerInterface           $_eventManager     _eventManager
     * @param PencilInterface            $pencilInterface   pencilInterface
     * @param ProductRepositoryInterface $productRepository productRepository
     * 
     * @return void
     */
    public function __construct(
        Http $http,
        Context $context,
        HeavyService $heavyService,
        PencilFactory $pencilFactory,
        ProductFactory $productFactory,
        ManagerInterface $_eventManager,
        PencilInterface $pencilInterface,
        ProductRepositoryInterface $productRepository
    ) {
        parent::__construct($context);
        $this->http = $http;
        $this->heavyService = $heavyService;
        $this->pencilFactory = $pencilFactory;
        $this->_eventManager = $_eventManager;
        $this->productFactory = $productFactory;
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
        // echo $this->pencilInterface->getPencilType() . "</br>";
        // $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        // $pencil = $objectManager->create('SimplifiedMagento\FirstModule\Model\Pencil');
        // var_dump($pencil);
        // $book = $objectManager->create('SimplifiedMagento\FirstModule\Model\Book');
        // echo $book->getBookType() . "</br>";
        // var_dump($book);
        // $student = $objectManager->create('SimplifiedMagento\FirstModule\Model\Student');
        // var_dump($student);
        // $pencil = $this->pencilFactory->create(['name' => 'Bob', 'school' => 'Bach khoa Da Nang']);
        // var_dump($pencil);
        // $product = $this->productFactory->create()->load(1);
        // $product->setName("Iphone XR");
        // $productName = $product->getName();
        // echo $productName . "</br>";
        // $id = $product->getIdBySku('MH02-XL-Red');
        // echo $id . "</br>";
        // echo "Main function" . "</br>";
        // $message = new \Magento\Framework\DataObject(['greeting' => 'Good morning']);
        // $this->_eventManager->dispatch('custom_event', ['greeting' => $message]);
        // echo $message->getGreeting() . "</br>";
        $id = $this->http->getParam('id', 0);

        if ($id == 1) {
            $this->heavyService->printHeavyServiceMessage();
        } else {
            echo "Heavy service not used";
        }
    }
}