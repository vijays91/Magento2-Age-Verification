<?php 
/**
 * @author VIJAYAKUMAR S
 * @copyright Copyright (c) 2018
 * @package Learn_Ageverify
 */

namespace Learn\Ageverify\Helper; 

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{ 	
 	protected $_scopeConfig;
	protected $_reportCollectionFactory;    

    const XML_PATH_AGE_VERIFY_ENABLE		= 'ageverify_tab/ageverify_setting/ageverify_active';
    const XML_PATH_AGE_VERIFY_TITLE     	= 'ageverify_tab/ageverify_setting/ageverify_title';
    const XML_PATH_AGE_VERIFY_AGREE         = 'ageverify_tab/ageverify_setting/ageverify_agree_button';
    const XML_PATH_AGE_VERIFY_DISAGREE      = 'ageverify_tab/ageverify_setting/ageverify_disagree_button';
    const XML_PATH_AGE_VERIFY_CONTENT       = 'ageverify_tab/ageverify_setting/ageverify_content';
    const XML_PATH_AGE_VERIFY_REDIR         = 'ageverify_tab/ageverify_setting/ageverify_redirect';

 	public function __construct (
			\Magento\Framework\App\Helper\Context $context,
			\Magento\Reports\Model\ResourceModel\Product\Sold\CollectionFactory  $reportCollectionFactory,
			\Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig 
		) {
 		$this->_reportCollectionFactory = $reportCollectionFactory;
		parent::__construct($context);
		$this->_scopeConfig = $scopeConfig;
    }
    
    public function ageverify_enable() {
        return $this->_scopeConfig->getValue(self::XML_PATH_AGE_VERIFY_ENABLE);
    }
    
    public function ageverify_title() {
        return $this->_scopeConfig->getValue(self::XML_PATH_AGE_VERIFY_TITLE);
    }

    public function ageverify_content() {
        return $this->_scopeConfig->getValue(self::XML_PATH_AGE_VERIFY_CONTENT);
    }
    
    public function ageverify_agree_button() {
        return $this->_scopeConfig->getValue(self::XML_PATH_AGE_VERIFY_AGREE);
    }

    public function ageverify_disagree_button() {
        return $this->_scopeConfig->getValue(self::XML_PATH_AGE_VERIFY_DISAGREE);
    }
    
    public function ageverify_redirect_url() {
        return $this->_scopeConfig->getValue(self::XML_PATH_AGE_VERIFY_REDIR);
    }
}