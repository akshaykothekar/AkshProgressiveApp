<?php
/**
 *
 * @author      Akshmagento Team (support@Akshmagento.com)
 * @copyright   Copyright (c) 2020 Akshmagento (http://www.Akshmagento.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @category    Akshmagento
 * @package     Akshmagento_AkshProgressiveApp
 */

namespace Akshmagento\AkshProgressiveApp\Model;

class Notification extends \Magento\Framework\Model\AbstractModel
{

    /**
     * CMS page cache tag
     */
    const CACHE_TAG = 'pwa_notification';

    protected $_cacheTag = 'pwa_notification';

    /**
     * Prefix of model name
     *
     * @var string
     */
    protected $_notificationPrefix = 'pwa_notification';

    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null,
        \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null,
        array $data = []
    ) {
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    protected function _construct()
    {
        $this->_init('Akshmagento\AkshProgressiveApp\Model\ResourceModel\Notification');
    }
}
