<?php
/**
 *
 * @author      Akshmagento Team (support@Akshmagento.com)
 * @copyright   Copyright (c) 2020 Akshmagento (http://www.Akshmagento.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @category    Akshmagento
 * @package     Akshmagento_AkshProgressiveApp
 */

namespace Akshmagento\AkshProgressiveApp\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper
{
    protected $_storeManager;

    public function __construct(
        \Magento\Framework\App\Helper\Context $context,
        \Magento\Store\Model\StoreManagerInterface $storeManager
    ) {
        $this->_storeManager = $storeManager;
        parent::__construct($context);
    }

    public function getStore()
    {
        return $this->_storeManager->getStore();
    }

    public function isEnabled()
    {
        return $this->scopeConfig->getValue(
            'akshprogressiveapp/general/enable',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $this->getStore()->getId()
        );
    }

    public function getManifestShortName()
    {
        return $this->scopeConfig->getValue(
            'akshprogressiveapp/manifest/short_name',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $this->getStore()->getId()
        );
    }

    public function getManifestName()
    {
        return $this->scopeConfig->getValue(
            'akshprogressiveapp/manifest/name',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $this->getStore()->getId()
        );
    }

    public function getManifestDescription()
    {
        return $this->scopeConfig->getValue(
            'akshprogressiveapp/manifest/description',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $this->getStore()->getId()
        );
    }

    public function getManifestStartUrl()
    {
        return $this->scopeConfig->getValue(
            'akshprogressiveapp/manifest/start_url',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $this->getStore()->getId()
        );
    }

    public function getManifestThemeColor()
    {
        return $this->scopeConfig->getValue(
            'akshprogressiveapp/manifest/theme_color',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $this->getStore()->getId()
        );
    }

    public function getManifestBgColor()
    {
        return $this->scopeConfig->getValue(
            'akshprogressiveapp/manifest/background_color',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $this->getStore()->getId()
        );
    }

    public function getManifestDisplayType()
    {
        return $this->scopeConfig->getValue(
            'akshprogressiveapp/manifest/display_type',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $this->getStore()->getId()
        );
    }

    public function getManifestOrientation()
    {
        return $this->scopeConfig->getValue(
            'akshprogressiveapp/manifest/orientation',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $this->getStore()->getId()
        );
    }

    public function getManifestIcon()
    {
        return $this->scopeConfig->getValue(
            'akshprogressiveapp/manifest/icon',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $this->getStore()->getId()
        );
    }

    public function getManifestIconSizes()
    {
        return $this->scopeConfig->getValue(
            'akshprogressiveapp/manifest/icon_sizes',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $this->getStore()->getId()
        );
    }

    public function getFirebaseScript()
    {
        return $this->scopeConfig->getValue(
            'akshprogressiveapp/notification/fcm_config',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $this->getStore()->getId()
        );
    }

    public function getServerKey()
    {
        return $this->scopeConfig->getValue(
            'akshprogressiveapp/notification/fcm_server_key',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $this->getStore()->getId()
        );
    }

    public function getTopicName()
    {
        return $this->scopeConfig->getValue(
            'akshprogressiveapp/notification/fcm_topic_name',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $this->getStore()->getId()
        );
    }

    public function getFcmVersion()
    {
        return $this->scopeConfig->getValue(
            'akshprogressiveapp/notification/fcm_version',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $this->getStore()->getId()
        );
    }

    public function getMessageSenderId()
    {
        return $this->scopeConfig->getValue(
            'akshprogressiveapp/notification/fcm_messaging_sender_id',
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE,
            $this->getStore()->getId()
        );
    }

    public function logger()
    {
        return $this->_logger;
    }

}