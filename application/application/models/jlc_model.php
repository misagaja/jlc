<?php


class Jlc_Model extends Model 
{
	
	function postavi_session(){
		$newdata = array('kriterijum'  => "namestaj",);

		$this->session->set_userdata($newdata);
		
		//echo $this->session->userdata('kriterijum');
}

// --------------------------RAD SA KORISNICIMA ----------------------------------

// ---------------------------------------------------------------------------------------


	function daj_sliku_korisnika($id)
	{ 
		$query=$this->db->query("select * from jlc_korisnici where projekat='jlc' and userid='".$id."'");
		
		foreach ($query->result() as $row)
		{
        		
echo '<img src="'.$row->link_slike.'" style="width:50px;height:50px;">';


		}
		
		
		
	}
// ---------------------------------------------------------------------------------------


	function registracija($ime,$prezime,$adresa,$mesto,$posta,$emejl,$link_slike,$userid,$lozinka,$datum,$status,$m_telefon)
	{ 
//echo "dobio".$userid;
		$t=time();
		$t=$t+7200;
		$datum = date('d.m.Y H:i:s', $t);

		$query="insert into jlc_korisnici values('','$ime','$prezime','$adresa','$mesto','$posta','$emejl','$link_slike','$userid','$lozinka','$datum','0','$m_telefon','jlc')";
//		echo $query;	
		$this->db->query($query);
	}




// ---------------------------------------------------------------------------------------

	
	function updaterecords($ime,$prezime,$adresa,$mesto,$posta,$mejl,$link_slike,$userid,$lozinka,$datum,$status,$m_telefon,$id)
	{
		$q="update jlc_korisnici SET ime='$ime', prezime='$prezime',adresa='$adresa', mesto='$mesto', posta='$posta', mejl='$mejl', link_slike='$link_slike', userid='$userid', lozinka='$lozinka', datum_reg='$datum', status='$status', m_telefon='$m_telefon' where  projekat='jlc' and userid='".$id."'";
//	echo $q;
		$query=$this->db->query($q);
	}	

// ---------------------------------------------------------------------------------------

	
	function deleterecords($id)
	{
	

		$this->db->query("delete  from jlc_korisnici where  projekat='jlc' and userid='".$id."'");

	}

// ---------------------------------------------------------------------------------------

	
	function displayrecordsById($id)
	{
	//	$query=$this->db->query("select * from jlc_korisnici where  projekat='jlc' and userid='".$id."'");
		
		
		
$this->db->select('*');
$this->db->distinct();
$this->db->from('jlc_korisnici');
$this->db->where('projekat', 'jlc');
$this->db->where('userid', $id);
$query = $this->db->get();
		
		return $query->result();
	}



// ---------------------------------------------------------------------------------------

	
	function displayrecords()
	{
		$query=$this->db->query("select * from jlc_korisnici where  projekat='jlc';");
		return $query->result();
	}

// ---------------------------------------------------------------------------------------

	function asaverecords($name,$email,$mobile)
	{
		$query="insert into jlc_korisnici values('','$name','','','','','','','','','','$name','$email','$mobile')";
	
		$this->db->query($query);
	}

// ---------------------------------------------------------------------------------------

	
	function proveri_usera($id)
	{
		$query=$this->db->query("select userid from jlc_korisnici where  projekat='jlc' and userid='".$id."'");
			
		return ($query->result());
		
	}

// ---------------------------------------------------------------------------------------

	
	function proveri_lozinku($id)
	{
		$query=$this->db->query("select lozinka,link_slike from jlc_korisnici where  projekat='jlc' and userid='".$id."'");
		return ($query->result());
	}

// ---------------------------RAD SA ROBOM - ARTIKLIMA - PROIZVODIMA

// ---------------------------------------------------------------------------------------------------

	function daj_robu_za_shop($krit)
	
	{	
	
		if ($krit<>1){
		$query=$this->db->query("SELECT link_filma,m_telefon,jlc_korisnici.userid,jlc_roba.id,jlc_roba.cena,jlc_roba.naziv,jlc_roba.dugi_opis,jlc_roba.dugi_opis as opis,jlc_roba.link_slike_r,jlc_roba.orjentacija,jlc_roba_slike.link_slike,jlc_roba_slike.orjentacija_slike FROM jlc_roba left join jlc_roba_slike on jlc_roba.id=id_artikla left join jlc_korisnici on jlc_roba.id_vlasnika=jlc_korisnici.userid where  jlc_roba.projekat='jlc' and (naziv like '%".$krit."%' or dugi_opis like '%".$krit."%')  order by jlc_roba.id");}
		if ($krit==1){
		$query=$this->db->query("SELECT link_filma,m_telefon,jlc_korisnici.userid,jlc_roba.id,jlc_roba.cena,jlc_roba.naziv,jlc_roba.dugi_opis,jlc_roba.dugi_opis as opis,jlc_roba.link_slike_r,jlc_roba.orjentacija,jlc_roba_slike.link_slike,jlc_roba_slike.orjentacija_slike FROM jlc_roba left join jlc_roba_slike on jlc_roba.id=id_artikla left join jlc_korisnici on jlc_roba.id_vlasnika=jlc_korisnici.userid where  jlc_roba.projekat='jlc' order by jlc_roba.id");}


		return ($query->result());	
	
	}

// ---------------------------------------------------------------------------------------------------

	function daj_sve_slike_robe($krit)
	
	{	
	
		if ($krit<>1){
		$query=$this->db->query("SELECT m_telefon, jlc_korisnici.userid, jlc_roba.id, jlc_roba.cena, jlc_roba.naziv, jlc_roba.dugi_opis, jlc_roba.link_slike_r, jlc_roba.orjentacija, jlc_roba_slike.link_slike,jlc_roba_slike.orjentacija_slike FROM jlc_roba left join jlc_roba_slike on jlc_roba.id=id_artikla left join jlc_korisnici on jlc_roba.id_vlasnika=jlc_korisnici.userid where  jlc_roba.projekat='jlc' and  (naziv like '%".$krit."%' or dugi_opis like '%".$krit."%')  order by jlc_roba.id");}
		if ($krit==1){
		$query=$this->db->query("SELECT m_telefon,jlc_korisnici.userid,jlc_roba.id,jlc_roba.cena,jlc_roba.naziv,jlc_roba.dugi_opis, jlc_roba.link_slike_r, jlc_roba.orjentacija,jlc_roba_slike.link_slike,jlc_roba_slike.orjentacija_slike FROM jlc_roba left join jlc_roba_slike on jlc_roba.id=id_artikla left join jlc_korisnici on jlc_roba.id_vlasnika=jlc_korisnici.userid where  jlc_roba.projekat='jlc' order by jlc_roba.id");}

		return ($query->result());	
	
	}

// ---------------------------------------------------------------------------------------------------


	function daj_aaasve_slike_robe()
	{// echo "ovde model";
        $query=$this->db->query("(SELECT m_telefon,jlc_korisnici.userid,jlc_roba.id,jlc_roba.cena,jlc_roba.naziv,jlc_roba.dugi_opis,jlc_roba.link_slike_r,jlc_roba.orjentacija,jlc_roba_slike.link_slike,jlc_roba_slike.orjentacija_slike FROM jlc_roba_slike RIGHT join jlc_roba on jlc_roba.id=id_artikla left join jlc_korisnici on jlc_roba.id_vlasnika=jlc_korisnici.userid order by jlc_roba.naziv)
UNION ALL
(SELECT m_telefon,jlc_korisnici.userid,jlc_roba.id,jlc_roba.cena,jlc_roba.naziv,jlc_roba.dugi_opis,jlc_roba.link_slike_r,jlc_roba.orjentacija,jlc_roba_slike.link_slike,jlc_roba_slike.orjentacija_slike FROM jlc_roba left join jlc_roba_slike on jlc_roba.id=id_artikla left join jlc_korisnici on jlc_roba.id_vlasnika=jlc_korisnici.userid order by jlc_roba.naziv)");

//$query=$this->db->query("(SELECT r.*,s.*,k.*  FROM jlc_roba_slike s right join jlc_roba r on r.id=s.id_artikla left join jlc_korisnici k on r.id_vlasnika=k.userid order by r.naziv)
//UNION ALL
//(SELECT  r1.*,s1.*,k1.*   FROM jlc_roba r1 left join jlc_roba_slike s1 on r1.id=s1.id_artikla left join jlc_korisnici k1 on r1.id_vlasnika=k1.userid order by r1.naziv)") ;

//echo "uradio sve";echo $query->num_rows();
	return ($query->result());	

	}
// ---------------------------------------------------------------------------------------------------

	function prikazi_robu_po_id($id)
	{
		//$query=$this->db->query("select * from jlc_roba where id='".$id."';");
		
				$query=$this->db->query("SELECT m_telefon,jlc_korisnici.userid,jlc_roba.* from jlc_roba left join jlc_korisnici on jlc_roba.id_vlasnika=jlc_korisnici.userid where  jlc_roba.projekat='jlc' and jlc_roba.id='".$id."';");
		
		
		return ($query->result());	
	
	}


// ---------------------------------------------------------------------------------------------------

	function daj_slike_robe_po_id($id)
	{
		$query=$this->db->query("select * from jlc_roba_slike where  projekat='jlc' and id_artikla='".$id."';");
		return ($query->result());	

	
	}




// ---------------------------------------------------------------------------------------
				
	function unesi_robu($naziv,$kratak_opis,$dugi_opis,$link_slike,$link_filma,$vlasnik,$cena,$status,$o)
	{ 
		$query="insert into jlc_roba values('','$naziv','$kratak_opis','$dugi_opis','$link_slike','$link_filma','$vlasnik','$cena','$status','$o','jlc')";
	
		$this->db->query($query);
		
		
	}
	
	
// ---------------------------------------------------------------------------------------

	function azuriraj_robu($naziv,$vlasnik,$kratak_opis,$dugi_opis,$link_slike,$link_filma,$cena,$status,$id,$o)
	{
			$query="update jlc_roba SET naziv='$naziv',id_vlasnika='$vlasnik',kratak_opis='$kratak_opis',dugi_opis='$dugi_opis',link_slike_r='$link_slike',link_filma='$link_filma',cena='$cena',status='$status',orjentacija='$o' where  projekat='jlc' and  id='".$id."'";
	
		$this->db->query($query);
	}

// ---------------------------------------------------------------------------------------

	
	function prikazi_robu($krit)
	{
		if($krit<>1){
			$query=$this->db->query("select * from jlc_roba where  projekat='jlc'  and (naziv like '%".$krit."%' or dugi_opis like '%".$krit."%');");
		}
		if($krit==1){
			$query=$this->db->query("select * from jlc_roba where  projekat='jlc' ;");
		}
		return $query->result();
	}
	
// ---------------------------------------------------------------------------------------

	
	function prikazi_robu_1($id,$krit)
	{
		if($krit<>1){
		$query=$this->db->query("select * from jlc_roba where  projekat='jlc' and (naziv like '%".$krit."%' or dugi_opis like '%".$krit."%') and id_vlasnika='".$id."';");
		}
		if($krit==1){
		$query=$this->db->query("select * from jlc_roba where  projekat='jlc' and  id_vlasnika='".$id."';");
		}
		return $query->result();
	}
	
// ******************************** RAD SA SLIKAMA PROIZVODA *****************************
// ---------------------------------------------------------------------------------------

	
	function prikazi_dodatne_slike($krit)
	{
		$query=$this->db->query("select *,id_artikla from jlc_roba right join jlc_roba_slike on id_artikla=jlc_roba.id where  jlc_roba.projekat='jlc'  and (naziv like '%".$krit."%' or dugi_opis like '%".$krit."%') order by id_artikla");
		return $query->result();
	}

// ---------------------------------------------------------------------------------------

	
	function prikazi_dodatne_slike_1($id,$krit)
	{
		$query=$this->db->query("select *,id_artikla from jlc_roba right join jlc_roba_slike on id_artikla=jlc_roba.id where  jlc_roba.projekat='jlc' and naziv like '%".$krit."%' 
 and id_vlasnika='".$id."' order by id_artikla");
					
		return $query->result();
	}


// ---------------------------------------------------------------------------------------

	
	function brisi_robu($id)
	{
	

	$this->db->query("delete  from jlc_roba where  projekat='jlc' and  id='".$id."'");

	}



// ---------------------------------------------------------------------------------------

	
	function brisi_sliku($id)
	{
	

	$this->db->query("delete  from jlc_roba_slike where  projekat='jlc' and  id='".$id."'");

	}



//---------------------------------------------------------------------------------------

	function upisi_sliku($i,$s,$o)
	{ 
		$query="insert into jlc_roba_slike values('','$i','$s','$o','jlc')";
		$this->db->query($query);
	}
// ---------------------------------------------------------------------------------------

	function upisi_prijavu($u,$p,$a)
	{ 
		
		$t=time();
		$t=$t+7200;
		$datum = date('d.m.Y H:i:s', $t);

		$query="insert into jlc_prijave values('','$u','$p','$datum','$datum','1','jlc')";
	
		$this->db->query($query);
		
		$newdata = array('user'  => $u,'avatar' => $a,'krit' => "1",); 

		$this->session->set_userdata($newdata);
		
	}

	// ---------------------------------------------------------------------------------------

	function odjava($id)
	{ 
		
		$t=time();
		$t=$t+7200;
		$datum = date('d.m.Y H:i:s', $t);

		$query="update jlc_prijave SET status=0, vreme_odjave='".$datum."' where  projekat='jlc' and status=1 and userid='".$id."';";

		$this->db->query($query);
		
		$newdata = array('user'  => "",);

		$this->session->set_userdata($newdata);
		
	}



	
}
?>