<?php
/**
 *
 * @author      Akshmagento Team (support@Akshmagento.com)
 * @copyright   Copyright (c) 2020 Akshmagento (http://www.Akshmagento.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @category    Akshmagento
 * @package     Akshmagento_AkshProgressiveApp
 */

namespace Akshmagento\AkshProgressiveApp\Block\Base\Js;

use Magento\Framework\View\Element\Template;

class Main extends \Magento\Framework\View\Element\Template
{
    protected $_helper;

    public function __construct(
        Template\Context $context,
        \Akshmagento\AkshProgressiveApp\Helper\Data $helper,
        array $data = []
    ) {
        $this->_helper = $helper;
        parent::__construct($context, $data);
    }

    public function getFirebaseScript()
    {
        return $this->_helper->getFirebaseScript();
    }

    public function getThemeColor()
    {
        return $this->_helper->getManifestThemeColor();
    }

    public function getFcmVersion()
    {
        return $this->_helper->getFcmVersion();
    }


}
