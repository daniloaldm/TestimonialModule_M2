<?php

namespace Dn\Testimonial\Block\Adminhtml;

class Testimonial extends \Magento\Backend\Block\Widget\Grid\Container
{
    /**
     * Block constructor
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_controller = 'adminhtml_testimonial';
        $this->_blockGroup = 'Dn_Testimonial';
        $this->_headerText = __('Testimonial');
        $this->_addButtonLabel = __('Add Item');
        parent::_construct();
    }

}
