<?php

class Pages extends CI_Controller
{

    public function index()
    {
        /*
        $styles = array();
        $styles[0] = 'font-awesome.min.css';
        $styles[1] = 'font-awesome.min.css';
        $data['styles'] = $styles;        
        */
        $this->template->load('master', 'public/v_home');
    }

}

// end of class 
