<?php
class Blog extends Controller {

	function index( )
	{
		echo 'ccao World! ';

	}
	
	function one( $p1=2,$p2=3 )
	{
		
		$this->load->view('meni_view');
		echo 'Hello World! '.$p1."-----".$p2;
		
	}
	
	
}
?>