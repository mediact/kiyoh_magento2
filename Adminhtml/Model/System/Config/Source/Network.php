<?php
/**
 * My own options
 *
 */
namespace Interactivated\Customerreview\Adminhtml\Model\System\Config\Source;

class Network
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'kiyoh', 'label'=>__('Old Kiyoh.com & kiyoh.nl')],
            ['value' => 'klantenvertellen', 'label'=>__('Klantenvertellen.nl & new kiyoh.com')],
        ];
    }
}
