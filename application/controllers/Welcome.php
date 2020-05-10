<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$this->load->view('front/meta');
		$this->load->view('front/header');
		$this->load->view('front/content');
		$this->load->view('front/footer');
		$this->load->view('front/script');
	}
}
