<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Common extends CI_Controller {

	public function index() {
		redirect(base_url('home'));
	}

	public function about() {
		$template['page_title'] = "About Page";
		$template['page_name'] = "common/about";
		$this->load->view('template',$template);
	}

	public function contact_us() {
		$template['page_title'] = "Contact Page";
		$template['page_name'] = "common/contact";
		$this->load->view('template',$template);
	}

	public function error() {
		$template['heading'] = "Wrong Page";
		$template['message'] = "Page you are looking is not available";
		$this->load->view('errors/html/error_404');
	}
}
