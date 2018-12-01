<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('register_model');
	}

	public function index() {
		$template['page_title'] = "Register Page";
		$template['page_name'] = "register/index";
		$this->load->view('template',$template);
	}

	public function image_upload(){
		$uploadDir = "./assets/uploadDirectory/";
		$ids = array();

		if($_POST['type']=='logo'){
			$temp = explode(".", $_FILES["file"]["name"]);
			$newfilename = round(microtime(true)) . '.' . end($temp);
			if(move_uploaded_file($_FILES["file"]["tmp_name"], $uploadDir . $newfilename)){
				$files = $uploadDir.$newfilename;
				$status = 1;
			} else {
				$status = 0;
			}
		} else {
			$count = $_POST['counts'];
			$files = array();
			$array = array();			
			for($i=0;$i<$count;$i++){
				$temp = explode(".", $_FILES["file_".$i]["name"]);
				$newfilename = round(microtime(true)) . '.' . end($temp);
				if(move_uploaded_file($_FILES["file_".$i]["tmp_name"], $uploadDir . $newfilename)){
					$files[] = $uploadDir.$newfilename;
					$array[] = array('image'=>$uploadDir.$newfilename);
					$status = 1;
				} else {
					$status = 0;
				}
			}

			$res = $this->register_model->image_upload($array);
			for($i=$res['first_id'];$i<=$res['last_id'];$i++){
				$ids[] = $i;
			}
		}



		if($status==1){
			$response = json_encode(array('status' => 'success' , 'data'=>$files, 'ids' => $ids));
		} else {
			$response = json_encode(array('status' => 'error'));
		}

		print $response;

	}

	public function pharm_reg(){
		$data = $_POST;
		$res = $this->register_model->pharm_reg($data);
		if($res){
			redirect("home");
		}
	}


	
}
