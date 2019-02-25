<?php
class Prijava extends Controller {

	function index(  )
	{
		$this->load->view('meni_view');

include "kajron.php";

		
		$this->load->view('prijava_view');
	}
		
	
}