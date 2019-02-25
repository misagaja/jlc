<?php
class Registracija extends Controller {


	public function Registracija()
	{
	//call CodeIgniter's default Constructor
	parent::Controller();
	$this->load->model('Korisnici_Model');
	$this->load->view('meni_jlc');
	}






	function index(  )
	{
		$this->load->model('Korisnici_Model');
		$this->load->view('meni_view');

include "kajron.php";

		
		$this->load->view('registracija_view');
	}
		
	
}