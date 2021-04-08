<?php


namespace Ghratzoo\CustomAdminController\Controller\Adminhtml\Export;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{

    /**
     * @return ResponseInterface|\Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        echo "Your Action";
        exit;
    }
}
