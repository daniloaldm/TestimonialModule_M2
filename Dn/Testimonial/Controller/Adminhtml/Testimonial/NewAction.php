<?php

namespace Dn\Testimonial\Controller\Adminhtml\Testimonial;

class NewAction extends \Dn\Testimonial\Controller\Adminhtml\Testimonial
{
    /**
     * Create new customer action
     *
     * @return \Magento\Backend\Model\View\Result\Forward
     */
    public function execute()
    {
        // the same form is used to create and edit
        $this->_forward('edit');
    }
}
