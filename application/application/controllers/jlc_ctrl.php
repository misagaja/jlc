<style>
div [position:relative;float:left;}
</style>
<?php


class Jlc_ctrl extends Controller 
{

//********************************************************************************
//    KONSTRUKTOR
//********************************************************************************
// ---------------------------------------------------------------------------
	public function Jlc_ctrl()
	
	{
	
	


	//call CodeIgniter's default Constructor
	parent::Controller();
	$this->load->library('session');
	$this->load->model('Jlc_Model');
		
	//$newdata = array('projekat'  => "mammy",);

		//$this->session->set_userdata($newdata);
//ovo je dodato danas 
	}
	
	public function index()
	{
	
	//load Model
//	$this->load->model('Jlc_Model');
	$this->load->view('jlc_meni');
	$this->load->view('jlc_pocetna');
	
	}
	

//********************************************************************************
//    KORISNICI
//********************************************************************************	
// ---------------------------------------------------------------------------
	public function savedata()
	{
		//load registration view form
		$this->load->view('jlc_meni');
		$this->load->view('jlc_registration_view');
		
		
	
		//Check submit button 
		if($this->input->post('save'))
		{
		//get form's data and store in local varable
		$n=$this->input->post('name');
		$e=$this->input->post('email');
		$m=$this->input->post('mobile');
		
//call saverecords method of Jlc_Model and pass variables as parameter
		$this->Jlc_Model->saverecords($n,$e,$m);		
		echo "Records Saved Successfully";
		redirect("http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/dispdata");
		}
	}

// ---------------------------------------------------------------------------
	
	public function dispdata()
	{
	$result['data']=$this->Jlc_Model->displayrecords();
	$this->load->view('jlc_meni');
	$this->load->view('jlc_display_records_view',$result);
	}

	
// ---------------------------------------------------------------------------

	public function daj_sliku_korisnika($id)
	{
		
 		$result['data']=$this->Jlc_Model->daj_sliku_korisnika($id);
 		
  		
	}
				
// ---------------------------------------------------------------------------
	
	
	public function deletedata($id)
	{

	$this->Jlc_Model->deleterecords($id);
	redirect("http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/dispdata");
	}

// ---------------------------------------------------------------------------	

	public function updatedata($id)
	{

	
	//echo $id;
	
	
	$result['data']=$this->Jlc_Model->displayrecordsById($id);
	$this->load->view('jlc_meni');
	$this->load->view('jlc_update_records_view',$result);	
	
		if($this->input->post('update'))
		{
		$ime=$this->input->post('ime');
		$prezime=$this->input->post('prezime');
		$adresa=$this->input->post('adresa');
		$mesto=$this->input->post('mesto');
		$posta=$this->input->post('posta');
		$mejl=$this->input->post('mejl');
		$link_slike=$this->input->post('link_slike');
		$userid=$this->input->post('userid');
		$lozinka=$this->input->post('lozinka');
		$datum=$this->input->post('datum');
		$status=$this->input->post('status');
		$m_telefon=$this->input->post('m_telefon');
		
		
		$this->Jlc_Model->updaterecords($ime,$prezime,$adresa,$mesto,$posta,$mejl,$link_slike,$userid,$lozinka,$datum,$status,$m_telefon,$id);
		
		redirect("http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/updatedata/".$userid);
			
		}
				
		
	}



// ---------------------------------------------------------------------------

	public function upis_prijave()
	{
		$this->load->view('jlc_meni');
		$this->load->view('jlc_prijava_view');

		if($this->input->post('login'))
		{
			
			$u=$this->input->post('userid');
			$p=$this->input->post('password');
			
			$result['data']=$this->Jlc_Model->proveri_lozinku($u);
			
			foreach($result['data'] as $row)
  			{   
  
				if ($row->lozinka==$p)
				{
					$a=$row->link_slike;
					$this->Jlc_Model->upisi_prijavu($u,$p,$a);
					redirect("http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/");
				}
				else
				{
					echo "neispravna lozinka";
			
				}
  			}
			
		}


	}

// ---------------------------------------------------------------------------

	public function odjavi()
	{
			$user = $this->session->userdata('user');
			$this->Jlc_Model->odjava($user);
			redirect("http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/");
 			
			
			
		


	}

// ---------------------------------------------------------------------------
	
	public function registracija()
	{ 
		$this->load->view('jlc_meni');
		$this->load->view('jlc_registracija_view');
		if($this->input->post('save'))
		{
			$link_slike=$this->input->post('link_slike');
			$mesto=$this->input->post('mesto');
			$adresa=$this->input->post('adresa');
			$posta=$this->input->post('postbr');
			$telefon=$this->input->post('telefon');
			$userid=$this->input->post('userid');
			$ime=$this->input->post('ime');
			$prezime=$this->input->post('prezime');
			$emejl=$this->input->post('email');
			$lozinka=$this->input->post('password');
			
			$result['data']=$this->Jlc_Model->proveri_usera($userid);
  
  			$broj=count($result['data']);
  			
			if ($broj==0)
			{
				$this->Jlc_Model->Registracija($ime,$prezime,$adresa,$mesto,$posta,$emejl,$link_slike,$userid,$lozinka,'','',$telefon);
				redirect("http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/");
			}
			else
			{
				
				
				$this->load->view('jlc_prikazi_poruku_view',$result);
		
			}
  			
		
			
		}
	}	

//********************************************************************************
//    ROBA-ARTIKLI
//********************************************************************************	
// ---------------------------------------------------------------------------
	public function unos_robe()
	{
		//load form view za unos
		$this->load->view('jlc_meni');
		$this->load->view('jlc_unos_robe_view');
		
		
	
		//Check submit button 
		if($this->input->post('save'))
		{
		//get form's data and store in local varable
		$naziv=$this->input->post('naziv');
		$vlasnik=$this->input->post('vlasnik');
		$kratak_opis=$this->input->post('kratak_opis');
		$dugi_opis=$this->input->post('dugi_opis');
		$link_slike=$this->input->post('link_slike');
		$cena=$this->input->post('cena');
		$status=$this->input->post('status');				
		$o=$this->input->post('orj');
		$f=addslashes($this->input->post('link_filma'));
		$f=addslashes($f);
//call saverecords method of Jlc_Model and pass variables as parameter
		$this->Jlc_Model->unesi_robu($naziv,$kratak_opis,$dugi_opis,$link_slike,$f,$vlasnik,$cena,$status,$o);		
		echo "Records Saved Successfully";
		redirect("http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/prikaz_robe");
		}
	}


// ---------------------------------------------------------------------------
	public function unos_robe_tel()
	{
		//load form view za unos
		//$this->load->view('jlc_meni');
		$this->load->view('a_unos_robe_tel_view');
		
		
	
		//Check submit button 
		if($this->input->post('save'))
		{
		//get form's data and store in local varable
		$naziv=$this->input->post('naziv');
		$vlasnik=$this->input->post('vlasnik');
		$kratak_opis=$this->input->post('kratak_opis');
		$dugi_opis=$this->input->post('dugi_opis');
		$link_slike=$this->input->post('link_slike');
		$cena=$this->input->post('cena');
		$status=$this->input->post('status');				
		$o=$this->input->post('orj');
		
//call saverecords method of Jlc_Model and pass variables as parameter
		$this->Jlc_Model->unesi_robu($naziv,$kratak_opis,$dugi_opis,$link_slike,$vlasnik,$cena,$status,$o);		
		echo "Records Saved Successfully";
		redirect("http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/prikaz_robe");
		}
	}

// ---------------------------------------------------------------------------
	
	public function prikaz_robe_1($id)
	{
		if($this->input->post('pretrazi'))
		{
			
			$krit=$this->input->post('krit');
		}
		else
		{
			$krit=1;
		}
	
		$result['data']=$this->Jlc_Model->prikazi_robu_1($id,$krit);
		$this->load->view('jlc_meni');
		$this->load->view('jlc_prikazi_robu_view',$result);
	}
// ---------------------------------------------------------------------------
	
	public function prikaz_robe()
	{
		if($this->input->post('pretrazi'))
		{
			
			$krit=$this->input->post('krit');
		}
		else
		{
			$krit=1;
		}
		
		$result['data']=$this->Jlc_Model->prikazi_robu($krit);
		$this->load->view('jlc_meni');
		$this->load->view('jlc_prikazi_robu_view',$result);
	}
	
// ---------------------------------------------------------------------------
	
	public function prikaz_robe_tel()
	{
		if($this->input->post('pretrazi'))
		{
			
			$krit=$this->input->post('krit');
		}
		else
		{
			$krit=1;
		}
		
		$result['data']=$this->Jlc_Model->prikazi_robu($krit);
		//$this->load->view('jlc_meni');
		$this->load->view('a_prikazi_robu_view',$result);
	}
	

// ---------------------------------------------------------------------------
	
	public function prikaz_robe_za_shop()
	 
	{
		if($this->input->post('pretrazi'))
		{
			
			$krit=$this->input->post('krit');
		}
		else
		{
			$krit=1;
		}
	
		$result['data']=$this->Jlc_Model->daj_robu_za_shop($krit);
		
		$this->load->view('jlc_meni');
		$this->load->view('jlc_prikaz_robe_za_shop_view',$result);
		
	

	}
	
	
	
	
	
// ---------------------------------------------------------------------------
	
	public function proba()
	 
	{
		if($this->input->post('pretrazi'))
		{
			
			$krit=$this->input->post('krit');
		}
		else
		{
			$krit=1;
		}
	
		$result['data']=$this->Jlc_Model->daj_robu_za_shop($krit);
		
		$this->load->view('a_proba_view',$result);
		
	

	}

// ----------------ovo ide u ctrl -----------------------------------------------------------	

	public function azuriranje_robe($id)
	{
	
		$result['data']=$this->Jlc_Model->prikazi_robu_po_id($id);
		$this->load->view('jlc_meni');
		$this->load->view('jlc_azuriraj_robu_po_id_view',$result);	

	
			//Check submit button 
		if($this->input->post('save'))
		{ 
		//get form's data and store in local varable
		$naziv=$this->input->post('naziv');
		$vlasnik=$this->input->post('vlasnik');
		$kratak_opis=addslashes($this->input->post('kratak_opis'));
		$dugi_opis=addslashes($this->input->post('dugi_opis'));
		$link_slike=$this->input->post('link_slike'); 
		$cena=$this->input->post('cena');
		$status=$this->input->post('status');
		$o=$this->input->post('orj');	
		$link_filma=addslashes($this->input->post('link_filma'));			
//call saverecords method of Jlc_Model and pass variables as parameter
		$this->Jlc_Model->azuriraj_robu($naziv,$vlasnik,$kratak_opis,$dugi_opis,$link_slike,$link_filma,$cena,$status,$id,$o);	
				
		echo "Records Saved Successfully";
		redirect("http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/azuriranje_robe/".$id);
		}
	
}

// ----------------ovo ide u ctrl -----------------------------------------------------------	

	public function detaljan_prikaz_robe($id)
	{
	
	$result['data'] =$this->Jlc_Model->prikazi_robu_po_id($id);
	$result['slike']=$this->Jlc_Model->daj_slike_robe_po_id($id);
	$this->load->view('jlc_meni');
	$this->load->view('jlc_prikazi_robu_po_id_view',$result);	
	
}

	
//********************************************************************************
//    SLIKE ARTIKALA
//********************************************************************************
// ---------------------------------------------------------------------------

	public function unos_slike($id)
	{
		$result['data']=$this->Jlc_Model->prikazi_robu_po_id($id);
		$this->load->view('jlc_meni');
		$this->load->view('jlc_unos_slike_view',$result);

		if($this->input->post('save'))
		{
			$i=$id;
			//$i=$this->input->post('id_artikla');
			$s=$this->input->post('link_slike');
			$o=$this->input->post('orj');
			$this->Jlc_Model->upisi_sliku($i,$s,$o);
			
 			redirect("http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/detaljan_prikaz_robe/".$id);
			
			
		}


	}
	
	

// ---------------------------------------------------------------------------
	
	public function upravljanje_slikama()
	{
		if($this->input->post('pretrazi'))
		{
			
			$krit=$this->input->post('krit');
		}
		else
		{
			$krit=1;
		}
		$result['data']=$this->Jlc_Model->prikazi_dodatne_slike($krit);
		$this->load->view('jlc_meni');
		$this->load->view('jlc_upravljanje_slikama_view',$result);
	}
	
// ---------------------------------------------------------------------------
	
	public function upravljanje_slikama_1($id)
	{
		if($this->input->post('pretrazi'))
		{
			
			$krit=$this->input->post('krit');
		}
		else
		{
			$krit=1;
		}
		$result['data']=$this->Jlc_Model->prikazi_dodatne_slike_1($id,$krit);
		$this->load->view('jlc_meni');
		$this->load->view('jlc_upravljanje_slikama_view_1',$result);
	}	


// ---------------------------------------------------------------------------
	
	
	public function brisanje_robe($id)
	{

	$this->Jlc_Model->brisi_robu($id);
	redirect("http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/prikaz_robe");
	}




// ---------------------------------------------------------------------------
	
	
	public function brisi_sliku($id)
	{

	$this->Jlc_Model->brisi_sliku($id);
	redirect("http://mihgaj8.freehostia.com/codeigniter/index.php/jlc_ctrl/upravljanje_slikama");
	}



// ---------------------------------------------------------------------------
	
	
	public function galerija_slika()
	{ 
		if($this->input->post('pretrazi'))
		{
			
			$krit=$this->input->post('krit');
		}
		else
		{
			$krit=1;
		}
	
	
		$result['data']=$this->Jlc_Model->daj_sve_slike_robe($krit);
		$this->load->view('jlc_meni');	
		$this->load->view('jlc_galerija_slika_view',$result);

	}



	
	
	
}
?>