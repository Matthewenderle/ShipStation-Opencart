<?php

namespace Opencart\Admin\Controller\Default;

class DefaultController  extends \Opencart\System\Engine\Controller
{
    /**
     * Function to restrict direct access
     * 
     * @return string
     */
    public function index(): Void
    {
        echo 'Test';
        // $this->load->language('extension/module/shipstation');
        // echo $this->language->get('text_direct_access');
    }
}
