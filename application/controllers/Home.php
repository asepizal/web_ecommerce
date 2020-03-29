<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MY_Controller {

    public function index()
    {
        $data['title'] = 'Homepage';
        $data['pages'] = 'pages/home/index';
        
        $this->viewTemplates($data);
    }

}

/* End of file Home.php */

