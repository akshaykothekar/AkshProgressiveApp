<?php
/**
 *
 * @author      Akshmagento Team (support@Akshmagento.com)
 * @copyright   Copyright (c) 2020 Akshmagento (http://www.Akshmagento.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @category    Akshmagento
 * @package     Akshmagento_AkshProgressiveApp
 */

namespace Akshmagento\AkshProgressiveApp\Controller\Index;

class SubscribeTopic extends \Magento\Framework\App\Action\Action
{
    protected $resultJsonFactory;
    protected $scope;
    protected $_curl;
    protected $_pwaHelper;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Controller\Result\JsonFactory $resultJsonFactory,
        \Magento\Framework\App\Config\ScopeConfigInterface $scope,
        \Magento\Framework\HTTP\Client\Curl $curl,
        \Akshmagento\AkshProgressiveApp\Helper\Data $pwaHelper
    ) {
        $this->resultJsonFactory = $resultJsonFactory;
        $this->scope = $scope;
        $this->_curl = $curl;
        $this->_pwaHelper = $pwaHelper;
        return parent::__construct($context);
    }

    public function execute()
    {
        $result = $this->resultJsonFactory->create();
        $data = $this->getRequest()->getPost('subUrl');
        $params = [];
        $topicName = $this->_pwaHelper->getTopicName();
        $serverKey = $this->_pwaHelper->getServerKey();
        $subscribeUrl = $data . '/rel/topics/' . $topicName;
        $this->_curl->addHeader('Content-Type', 'application/json');
        $this->_curl->addHeader('Authorization', 'key=' . $serverKey);
        $this->_curl->post($subscribeUrl, $params);
        return $result->setData($this->_curl->getStatus());
    }
}