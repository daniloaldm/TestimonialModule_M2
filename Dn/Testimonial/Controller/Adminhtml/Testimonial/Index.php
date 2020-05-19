<?php

namespace Dn\Testimonial\Controller\Adminhtml\Testimonial;

use Magento\Backend\App\Action;

class Index extends \Dn\Testimonial\Controller\Adminhtml\Testimonial
{
    /**
     * Index action
     *
     * @return void
     */
    public function execute()
    {
        $this->_initAction();
        $this->_view->getPage()->getConfig()->getTitle()->prepend(__('Testimonial'));
        $this->_view->renderLayout();
    }
}
