<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends Controller {
    public function Home()
    {
        parent::Controller();
        
        //load model
        $this->load->model('home1_model');
    }
        
    public function index()
    {
        //get data from the database
        $data['images'] = $this->home1_model->get_images();
        
        //load view and pass the data
        $this->load->view('home_heder_view', $data);
        $this->load->view('home_centar_view', $data);
    }
}