<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('home_model');
	}

	public function index() {
		$template['page_title'] = "Home Page";
		$template['page_name'] = "home/index";
		$this->load->view('template',$template);
	}

	public function details(){
		$template['page_title'] = "Details Page";
		$template['page_name'] = "home/details";
		$this->load->view('template',$template);
	}

	public function list_shop(){
		$data = $_POST;
		$result['data'] = $this->home_model->list_shops($data);
		$this->load->view('home/filter_result',$result);
		//print json_encode($data);
	}

	public function map($lat=null,$lng=null){
		if($lat==null || $lng==null){
			redirect('home');
		}
		$template['page_title'] = "Home Page";
		$template['page_name'] = "home/map_result";
		$template['map'] = array("lat"=>$lat,"lng"=>$lng);
		$this->load->view('template',$template);
	}


	
}
