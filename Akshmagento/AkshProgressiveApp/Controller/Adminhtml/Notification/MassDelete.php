<?php
/**
 *
 * @author      Akshmagento Team (support@Akshmagento.com)
 * @copyright   Copyright (c) 2020 Akshmagento (http://www.Akshmagento.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @category    Akshmagento
 * @package     Akshmagento_AkshProgressiveApp
 */

namespace Akshmagento\AkshProgressiveApp\Controller\Adminhtml\Notification;

use Magento\Framework\Controller\ResultFactory;
use Magento\Backend\App\Action\Context;
use Magento\Ui\Component\MassAction\Filter;
use Akshmagento\AkshProgressiveApp\Model\ResourceModel\Notification\CollectionFactory;

class MassDelete extends \Magento\Backend\App\Action
{
    /**
     * Massactions filter
     *
     * @var Filter
     */
    protected $filter;

    /**
     * @var CollectionFactory
     */
    protected $collectionFactory;

    /**
     * @param Context $context
     * @param Filter $filter
     * @param CollectionFactory $collectionFactory
     */
    public function __construct(
        Context $context,
        Filter $filter,
        CollectionFactory $collectionFactory
    ) {
        $this->filter = $filter;
        $this->collectionFactory = $collectionFactory;
        parent::__construct($context);
    }

    /**
     * @return \Magento\Backend\Model\View\Result\Redirect
     */
    public function execute()
    {
        $collection = $this->filter->getCollection($this->collectionFactory->create());
        $notificationDeleted = 0;
        foreach ($collection->getItems() as $notification) {
            $notification->delete();
            $notificationDeleted++;
        }
        $this->messageManager->addSuccess(
            __('A total of %1 record(s) have been deleted.', $notificationDeleted)
        );
        return $this->resultFactory->create(ResultFactory::TYPE_REDIRECT)->setPath('akshprogressiveapp/notification/index');
    }
}
