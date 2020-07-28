<?php
/**
 *
 * @author      Akshmagento Team (support@Akshmagento.com)
 * @copyright   Copyright (c) 2020 Akshmagento (http://www.Akshmagento.com)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 * @category    Akshmagento
 * @package     Akshmagento_AkshProgressiveApp
 */

namespace Akshmagento\AkshProgressiveApp\Model\System\Config\Source;

class Orientation implements \Magento\Framework\Data\OptionSourceInterface
{
    /**
     * @inheritdoc
     */
    public function toOptionArray()
    {
        $options = [];
        foreach ($this->toArray() as $value => $label) {
            $options[] = ["value" => $value, "label" => $label];
        }

        return $options;
    }

    /**
     * Get options in "key=>value" format.
     *
     * @return array
     */
    public function toArray()
    {
        return [
            "any" => __("Any"),
            "natural" => __("Natural"),
            "portrait" => __("Portrait"),
            "landscape" => __("Landscape"),
        ];
    }
}
