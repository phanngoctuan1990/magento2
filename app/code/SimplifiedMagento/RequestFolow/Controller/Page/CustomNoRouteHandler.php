<?php

namespace SimplifiedMagento\RequestFolow\Controller\Page;

use Magento\Framework\App\RequestInterface;
use Magento\Framework\App\Router\NoRouteHandlerInterface;

class CustomNoRouteHandler implements NoRouteHandlerInterface
{

    /**
     * Check and process no route request
     *
     * @param RequestInterface $request request
     * 
     * @return bool
     */
    public function process(RequestInterface $request)
    {
        $request->setRouteName('noroutefound')->setControllerName('page')->setActionName('customnoroute');
        return true;
    }
}
