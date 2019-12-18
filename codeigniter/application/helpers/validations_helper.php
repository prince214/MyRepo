<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); ?>

<?php


    function validate()
    {
    	$this->load->form_validation->set_rules(['uname','User Name','required']);
        $this->load->form_validation->set_rules(['upassword','User Name','required']);
        $this->load->form_validation->set_error_delimiters('<div class="text-danger"','<div>');
    }   

    ?>
