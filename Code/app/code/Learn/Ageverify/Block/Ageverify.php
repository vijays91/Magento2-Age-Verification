<?php 
/**
 * @author VIJAYAKUMAR S
 * @copyright Copyright (c) 2018
 * @package Learn_Ageverify
 */
 
namespace Learn\Ageverify\Block;
 
use Magento\Framework\Registry;
use \Learn\Ageverify\Helper\Data;

class Ageverify extends \Magento\Framework\View\Element\Template
{
    public $assetRepository;
    public $_coreSession;
    public $_helperData;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = [],
        \Magento\Framework\View\Asset\Repository $assetRepository,
        \Magento\Framework\Session\SessionManagerInterface $coreSession,
        Data $helperData
    )
    {
        // Get the asset repository to get URL of our assets
        $this->assetRepository = $assetRepository;
        $this->_coreSession = $coreSession;
        $this->_helperData = $helperData;
        return parent::__construct($context, $data);
    }

    public function helperInit() {        
        return $this->_helperData;
    }

    public function setValue($value){
        $this->_coreSession->start();
        $this->_coreSession->setAgeVerifydate($value);
    }

    public function getValue(){
        $this->_coreSession->start();
        return $this->_coreSession->getAgeVerifydate();
    }

    public function unSetValue(){
        $this->_coreSession->start();
        return $this->_coreSession->unsAgeVerifydate();
    }    
}