<?php
if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    public function index() {
        // echo "<pre>";print_r($this->template);die;
        // Set the title
        $this->template->title = 'Welcome!';

        
        // Dynamically add a css stylesheet
        $this->template->stylesheet->add(base_url("assets/bootstrap.css"));
        
        // Load a view in the content partial
        $this->template->content->view('hero', array('title' => 'Hello, world!'));

        $news = array(); // load from model (but using a dummy array here)
        $this->template->content->view('news', $news);
        
        // Set a partial's content
        $this->template->footer = 'Made with Twitter Bootstrap';
        
        // Publish the template
        $this->template->publish();
    }
}