<?php
/**
 * @author VIJAYAKUMAR S
 * @copyright Copyright (c) 2018
 * @package Learn_Ageverify
 */

namespace Learn\Ageverify\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{

    protected $_pageFactory;
    protected $request; 
    protected $helper;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Learn\Ageverify\Helper\Data $helper,
        \Magento\Framework\App\Request\Http $request,
        \Magento\Framework\Session\SessionManagerInterface $coreSession,
        \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory
    ) {
        $this->_resultPageFactory = $resultPageFactory;
        $this->request = $request;        
        $this->_coreSession = $coreSession;
        $this->resultJsonFactory = $resultJsonFactory;
        parent::__construct($context);
    }

    public function execute() {
        $type = $this->getRequest()->getParam('type');
        $result = $this->resultJsonFactory->create();
        if($type == "true") {
            $sess_val = 'm78v20a89';
            $this->_coreSession->start();
            $this->_coreSession->setAgeVerifydate($sess_val);
            $result->setData(['success' => 200]);
            return $result;
        }
        $result->setData(['error' => 202]);
        return $result;
    }
}
