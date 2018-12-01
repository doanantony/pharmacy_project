<?php
class Register_model extends CI_Model {
	function image_upload($data){
		$count = count($data);
		if($count>0){
			$this->db->insert_batch('pharm_galley',$data);
			$first_id = $this->db->insert_id();
			$last_id = $first_id + ($count-1);
			return array('first_id'=>$first_id,'last_id'=>$last_id);
		} else {
			return false;
		}		
	}

	function pharm_reg($data){
		$form_data = $data['basic_form_data'];
		$contact_data = $data['contact_form_data'];
		$form_array = json_decode("$form_data");
		$contact_array = json_decode("$contact_data");
		$form_data = array();
		$contact_data = array();
		foreach ($form_array as $value) {
			$form_data[$value->name] = $value->value;
		}
		foreach ($contact_array as $value) {
			$contact_data[$value->name] = $value->value;
		}

		$form_data = (object) $form_data;


		$insert_data = array(
			"name"=>$form_data->name,
			"phone_no"=>$contact_data['phone_no'],
			"email_id"=>$contact_data['email_id'],
			"address"=>$form_data->address,
			"delivery"=>$form_data->delivery,
			"logo"=>$data['data_logo'],
			"working_time"=>$form_data->working_time,
			"location"=>$form_data->location,
			"lat"=>$form_data->lat,
			"lng"=>$form_data->lng
		);
		
		$this->db->insert('pharmacy',$insert_data);
		$insert_id = $this->db->insert_id();

		$galley = explode(',', $data['data_image']);

		$gallery_array = array();
		foreach ($galley as $rs) {
			$gallery_array[] = array('pharm_galley_id'=>$rs,
									 'pharmacy_id'=>$insert_id
									);
		}

		$this->db->insert_batch('pharmacy_has_pharm_galley',$gallery_array);
		return true;
	}
}
?>