<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home1 extends Controller {
    public function Home1()
    {
        parent::Controller();
        
        //load model
        $this->load->model('home1_model');
    }
        
    public function index()
    {
    	        //get data from the database
        $data1['slike'] = ['http://bih-x.info/wp-content/uploads/2016/11/Marija-Terezija-237x300.jpg','http://patriot.rs/wp-content/uploads/2016/09/Pancevo-church_of_assumption-1.jpg','https://saznajlako.com/wp-content/uploads/2013/11/gde-se-nalazi-zgrada-Skupstina-grada-Beograda.jpg','https://scontent.fbeg4-1.fna.fbcdn.net/v/t1.0-9/28468071_530455380682460_640253116587244481_n.jpg?_nc_cat=107&oh=ee70fb5a40fa16eb383073e2a6f35d85&oe=5C578710'];
    
    
        //get data from the database
        $data['images'] = $this->home1_model->get_images();
        
        //load view and pass the data
        $this->load->view('meni_view');
        $this->load->view('home_heder_view', $data1);
        $this->load->view('home1_centar_view', $data);
    }
}