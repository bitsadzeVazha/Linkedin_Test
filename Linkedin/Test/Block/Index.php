<?php
 
namespace Linkedin\Test\Block;
 
class Index extends \Magento\Framework\View\Element\Template
{
     protected $_pageFactory;
     protected $_postLoader;
     protected $helperData;
 
    public function __construct(
          \Magento\Framework\View\Element\Template\Context $context,
          \Magento\Framework\View\Result\PageFactory $pageFactory,
          \Linkedin\Test\Helper\Data $helperData
     ){
          $this->_pageFactory = $pageFactory;
          $this->helperData = $helperData;
          return parent::__construct($context);
    }

     public function LinkedinEnable(){
        $config = $this->helperData->getGeneralConfig('enable');
        return $config;
    }
    public function LinkedinVisible(){
        $config = $this->helperData->getGeneralConfig('visible');
        return $config;
    }
 
    public function execute()
    {
       
          return $this->_pageFactory->create();
    }
}