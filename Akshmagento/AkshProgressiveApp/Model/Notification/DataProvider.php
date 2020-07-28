<?php
/**
 *
 * @author      Akshmagento Team (support@Akshmagento.com)
 * @copyright   Copyright (c) 2020 Akshmagento (http://www.Akshmagento.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 *
 * @category    Akshmagento
 * @package     Akshmagento_AkshProgressiveApp
 */

namespace Akshmagento\AkshProgressiveApp\Model\Notification;

use Akshmagento\AkshProgressiveApp\Model\ResourceModel\Notification\CollectionFactory;

class DataProvider extends \Magento\Ui\DataProvider\AbstractDataProvider
{

    /**
     * @var array
     */
    protected $loadedData;

    /**
     * @param string $name
     * @param string $primaryFieldName
     * @param string $requestFieldName
     * @param CollectionFactory $notificationCollectionFactory
     * @param array $meta
     * @param array $data
     */
    public function __construct(
        $name,
        $primaryFieldName,
        $requestFieldName,
        CollectionFactory $notificationCollectionFactory,
        array $meta = [],
        array $data = []
    ) {
        $this->collection = $notificationCollectionFactory->create();
        parent::__construct($name, $primaryFieldName, $requestFieldName, $meta, $data);
    }

    public function getData()
    {
        if (isset($this->loadedData)) {
            return $this->loadedData;
        }
        $items = $this->collection->getItems();
        foreach ($items as $notification) {
            $notificationData = $notification->getData();
            $iconData = unserialize($notification['icon']);
            if (!empty($iconData)) {
                $notificationData['icon'] = [];
                $notificationData['icon'][0]['name'] = $iconData[0]['name'];
                $notificationData['icon'][0]['url'] = $iconData[0]['url'];
            }
            $this->loadedData[$notification->getId()]['notification'] = $notificationData;
        }
        return $this->loadedData;
    }
}
