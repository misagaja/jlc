<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home1_model extends Model {
/*   public function Home1_model()
    {
        $this->load->database();
    }
 */   
    public function get_images()
    {
       $query = $this->db->get('recnik_v_ilustracije');
	$this->db->get();
//$query = $this->db->query('SELECT * FROM recnik_v_ilustracije where 1');
// 	$this->db->get();

//$query = $this->db->select('t1.*, t2.prevod,t2.rec')
//     ->from('gradovi_ilustracije as t1')
//     ->where('uneo','gost')
//     ->or_where('uneo','admin')
//     ->where('id_reci','5')
//     ->or_where('id_reci','2')
//    ->join('gradovi as t2', 't1.id_reci = t2.id', 'INNER')
//     ->get();


        if($query->num_rows() > 0){
            $result = $query->result_array();
            return $result;
        }else{
            return false;
        }
    }
}