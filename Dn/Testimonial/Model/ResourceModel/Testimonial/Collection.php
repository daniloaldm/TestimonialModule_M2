<?php

namespace Dn\Testimonial\Model\ResourceModel\Testimonial;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Init resource collection
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Dn\Testimonial\Model\Testimonial', 'Dn\Testimonial\Model\ResourceModel\Testimonial');
    }
}
