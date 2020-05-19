<?php

namespace Dn\Testimonial\Model;

class Testimonial extends \Magento\Framework\Model\AbstractModel
{
   
    /**
     * Initialize resource model
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('Dn\Testimonial\Model\ResourceModel\Testimonial');
    }
}
