<?php
class Home_model extends CI_Model {
	
	function list_shops($data){

		$current_lat = $data['current_lat']; 
		$current_lng = $data['current_lng'];

		if($current_lng==''){
			$current_lng = "76.2710833";
		}

		if($current_lat==''){
			$current_lat = "10.8505159";
		}

		$this->db->select("pharmacy.*,3956 * 2 * ASIN(SQRT(POWER(SIN(($current_lat - pharmacy.lat) * pi()/180 / 2), 2) + COS($current_lat * pi()/180 ) * COS(pharmacy.lat * pi()/180) * POWER(SIN(($current_lng - pharmacy.lng) * pi()/180 / 2), 2) )) as distance");

		$this->db->where('status',1);
		if($data['delivery']!=''){
			$this->db->where('delivery',$data['delivery']);
		}

		if($data['sort_type']!=''){
			if($data['sort_type']==0){
				$this->db->order_by('id','DESC');
			} else {
				$this->db->order_by('distance ASC');
			}			
		}

		if($data['key_word']!=''){
			$this->db->like('name', $data['key_word']);		
		}

		return $this->db->get('pharmacy')->result();

	}
	
}
?>