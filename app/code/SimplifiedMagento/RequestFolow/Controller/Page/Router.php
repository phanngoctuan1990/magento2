<?php

namespace SimplifiedMagento\RequestFolow\Controller\Page;

use Magento\Framework\App\ActionFactory;
use Magento\Framework\App\RouterInterface;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\App\RequestInterface;

class Router implements RouterInterface
{
    private $actionFactory;

    /**
     * Router construct
     * 
     * @param ActionFactory $actionFactory actionFactory
     * 
     * @return void
     */
    public function __construct(ActionFactory $actionFactory)
    {
        $this->actionFactory = $actionFactory;
    }

    /**
     * Match application action by request
     *
     * @param RequestInterface $request request
     * 
     * @return ActionInterface
     */
    public function match(RequestInterface $request)
    {
        $path = trim($request->getPathInfo(), '/');
        $paths = explode('-', $path);
        $request->setModuleName($paths[0]);
        $request->setControllerName($paths[1]);
        $request->setActionName($paths[2]);

        return $this->actionFactory->create('Magento\Framework\App\Action\Forward', ['request' => $request]);
    }
}