<?php

namespace SimplifiedMagento\RequestFolow\Controller\Page;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\Result\Raw;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\Controller\Result\JsonFactory;
use Magento\Framework\Controller\Result\ForwardFactory;
use Magento\Framework\Controller\Result\RedirectFactory;

class ResponseType extends Action
{
    private $raw;
    private $pagefactory;
    private $jsonFactory;
    private $forwardFactory;
    private $redirectFactory;

    /**
     * ResponseType construct
     * 
     * @param Raw             $raw             raw
     * @param Context         $context         context
     * @param PageFactory     $pagefactory     pagefactory
     * @param JsonFactory     $jsonFactory     jsonFactory
     * @param ForwardFactory  $forwardFactory  forwardFactory
     * @param RedirectFactory $redirectFactory redirectFactory
     * 
     * @return void
     */
    public function __construct(
        Raw $raw,
        Context $context,
        PageFactory $pagefactory,
        JsonFactory $jsonFactory,
        ForwardFactory $forwardFactory,
        RedirectFactory $redirectFactory
    ) {
        $this->raw = $raw;
        $this->pagefactory = $pagefactory;
        $this->jsonFactory = $jsonFactory;
        $this->forwardFactory = $forwardFactory;
        $this->redirectFactory = $redirectFactory;
        parent::__construct($context);
    }

    /**
     * ResponseType view action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     * 
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function execute()
    {
        // return $this->jsonFactory->create()->setData(['key' => 'value']);
        // return $this->pagefactory->create();
        // return $this->raw->setContents('Hello world');
        // $result = $this->forwardFactory->create();
        // $result->setModule('noroutefound')->setController('page')->forward('customnoroute');
        // return $result;
        $result = $this->redirectFactory->create();
        $result->setPath('noroutefound/page/customnoroute');
        return $result;
    }
}