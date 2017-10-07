<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	    public function __construct()
    {
        parent::__construct();
        
        //load model
        $this->load->model('home_model');
    }
        
    public function index()
    {
        //get data from the database
        $data['images'] = $this->home_model->get_images();
        
        //load view and pass the data
        $this->load->view('home_view', $data);
    }
    
	// public function index()
 //    {
 //        $this->load->view('home_view');
 //    }

}