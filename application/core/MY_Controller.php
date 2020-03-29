<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();
        $model = strtolower(get_class($this));

        if(file_exists(APPPATH. 'models/'. $model. '_model.php')){
            // param 2 = alias untuk model, param 3 = autoconnect ke database
            $this->load->model($model . '_model', $model, true);
        }
    }

    public function viewTemplates($data)
    {
        $this->load->view('templates/app',$data);
    }
    
}

/* End of file MY_Controller.php */
